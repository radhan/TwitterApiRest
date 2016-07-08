<?php
	
	//On inclut l'api et les classes
	require_once('TwitterAPIExchange.php')	;
	require_once('user.classe.php') 		;
	require_once('tweet.classe.php') 		;
	require_once('entitie.classe.php') 		;
	require_once('hashtag.classe.php') 		;
	require_once('media.classe.php') 		;
	require_once('sizes.classe.php') 		;
	require_once('size.classe.php') 		;
	require_once('url.classe.php') 			;
	require_once('user_mention.classe.php') ;
	
	class Twitter {
		
		//Clés OAuth
		private $consumerKey 		;
		private $consumerSecret 	;
		private $accessToken 		;
		private $accessTokenSecret 	;
		private $bearerAccessToken	;
		
		//Identifiant de la connexion
		private $settings			;
		
		public function __toString() {
			return('Cette classe permet de définir et manipuler un compte Twitter en utilisant l\'API REST.<br/>') ;
		}
		
		//Constructeur
		public function __construct() {
			$xml = new SimpleXMLElement('identifications.xml', Null, True) ;
			$this->consumerKey 			= $xml->consumerKey 		;
			$this->consumerSecret 		= $xml->consumerSecret		;
			$this->accessToken			= $xml->accessToken			;
			$this->accessTokenSecret	= $xml->accessTokenSecret	;
			$this->bearerAccessToken	= $xml->bearerAccessToken	;
			
			$this->settings = array(
				'oauth_access_token' 		=> $this->accessToken,
				'oauth_access_token_secret' => $this->accessTokenSecret,
				'consumer_key' 				=> $this->consumerKey,
				'consumer_secret' 			=> $this->consumerSecret
			);
		}
		
		//Trouver le token Bearer permettant l'accès au contexte utilisateur
		private function getBearerToken() {
			$url = 'https://api.twitter.com/oauth2/token' ;
			$requestMethod = 'POST' ;
			$postfield = array('grant_type' => 'client_credentials');
			
			$twitter = new TwitterAPIExchange($this->settings) ;
			
			$basic_credentials = base64_encode($this->consumerKey . ':' . $this->consumerSecret) ;
			$headers = array('Authorization: Basic '.$basic_credentials, 'Content-Type: application/x-www-form-urlencoded;charset=UTF-8') ;
			
			$resultat = $twitter->setPostfields($postfield)
								->buildOauth($url, $requestMethod)
								->performRequest(true, array(), $headers) ;
			$resultat = json_decode($resultat) ;
			$this->bearerAccessToken = $resultat->{'access_token'} ;
		}
		
		public function invalidateBearerToken() {
			$url = 'https://api.twitter.com/oauth2/invalidate_token' ;
			$requestMethod = 'POST' ;
			$postfield = array('access_token' => $this->bearerAccessToken) ;
			
			$twitter = new TwitterAPIExchange($this->settings) ;
			echo $resultat = $twitter->setPostfields($postfield)
								->buildOauth($url, $requestMethod)
								->performRequest() ;
		}
		
		public function ecrireTweet($message) {
			$this->getBearerToken() ;
			
			$url = 'https://api.twitter.com/1.1/statuses/update.json' ;
			$requestMethod = 'POST' ;
			$postfield = array('status' => $message);
			
			$twitter = new TwitterAPIExchange($this->settings) ;
			
			$bearer_credentials = base64_encode($this->bearerAccessToken) ;
			$headers = array('Authorization: Bearer '.$bearer_credentials, 'Content-Type: application/x-www-form-urlencoded;charset=UTF-8') ;
			
			return $resultat = $twitter->setPostfields($postfield)
								->buildOauth($url, $requestMethod)
								->performRequest(true, array(), $headers) ;
		}
		
		public function getTweetsByUser($utilisateur) {
			$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json' ;
			$getfield = '?screen_name=' . $utilisateur->getScreen_Name() ;
			$requestMethod = 'GET' ;
			
			$twitter = new TwitterAPIExchange($this->settings) ;
			$lesTweetsJson = $twitter->setGetfield($getfield)
									 ->buildOauth($url, $requestMethod)
									 ->performRequest() ;
						 
			//Après avoir récupérer les tweets on créer les objets
			$lesTweetsJson = json_decode($lesTweetsJson) ;
			$lesTweets = array() ;
			
			foreach($lesTweetsJson as $unTweetJson) {
				//On créer l'objet Tweet
				$unTweet = new Tweet() ;
				
				//On rempli l'objet tweet
				$unTweet->setCreated_at($unTweetJson->{'created_at'}) 									;
				$unTweet->setId($unTweetJson->{'id'}) 													;
				$unTweet->setId_str($unTweetJson->{'id_str'}) 											;
				$unTweet->setText($unTweetJson->{'text'}) 												;
				$unTweet->setTruncated($unTweetJson->{'truncated'}) 									;
				$unTweet->setEntities($unTweetJson->{'entities'}) 										;
				$unTweet->setSource($unTweetJson->{'source'}) 											;
				$unTweet->setIn_reply_to_status_id($unTweetJson->{'in_reply_to_status_id'}) 			;
				$unTweet->setIn_reply_to_status_id_str($unTweetJson->{'in_reply_to_status_id_str'})		;
				$unTweet->setIn_reply_to_user_id($unTweetJson->{'in_reply_to_user_id'}) 				;
				$unTweet->setIn_reply_to_user_id_str($unTweetJson->{'in_reply_to_user_id_str'}) 		;
				$unTweet->setIn_reply_to_screen_name($unTweetJson->{'in_reply_to_screen_name'}) 		;
				
				//On créer l'objet Utilisateur
				$utilisateur = new User() ;
				
				//On regarde si c'est un retweet ou non (si oui, le text contient "RT" au début)
				$isRetweet = substr($unTweetJson->{'text'}, 0, 2) 										;
				
				//Si c'est un retweet
				if($isRetweet == "RT") {
					$unTweet->setRetweet_count($unTweetJson->{'retweeted_status'}->{'retweet_count'})	;
					$unTweet->setFavorite_count($unTweetJson->{'retweeted_status'}->{'favorite_count'})	;
					$unTweet->setText(substr($unTweetJson->{'text'}, strpos($unTweetJson->{'text'}, ': ')+1, strlen($unTweetJson->{'text'}))) 	;
					$utilisateur->setScreen_name($unTweetJson->{'retweeted_status'}->{'user'}->{'screen_name'}) 								;
					$utilisateur->setName($unTweetJson->{'retweeted_status'}->{'user'}->{'name'}) 												;
					$utilisateur->setProfile_image_url($unTweetJson->{'retweeted_status'}->{'user'}->{'profile_image_url'}) 					;
				} else {
					$unTweet->setRetweet_count($unTweetJson->{'retweet_count'}) 						;
					$unTweet->setFavorite_count($unTweetJson->{'favorite_count'}) 						;
					$unTweet->setText($unTweetJson->{'text'}) 											;
					$utilisateur->setScreen_name($unTweetJson->{'user'}->{'screen_name'}) 				;
					$utilisateur->setName($unTweetJson->{'user'}->{'name'}) 							;
					$utilisateur->setProfile_image_url($unTweetJson->{'user'}->{'profile_image_url'}) 	;
				}
				
				//On ajoute l'utilisateur au tweet
				$unTweet->setUser($utilisateur) ;
				
				//On ajoute le tweet à la liste de tweet
				$lesTweets[] = $unTweet ;
			}
			
			//On renvoie le tableau de tweets
			return $lesTweets ;
		}
		
		public function search($query) {
			$url = 'https://api.twitter.com/1.1/search/tweets.json' ;
			$getfield = '?q=' . $query ;
			$requestMethod = 'GET' ;
			
			$twitter = new TwitterAPIExchange($this->settings) ;
			$lesTweetsJson = $twitter->setGetfield($getfield)
									 ->buildOauth($url, $requestMethod)
									 ->performRequest() ;
			
			//Après avoir récupérer les tweets on créer les objets
			$lesTweetsJson = json_decode($lesTweetsJson) ;
			$lesTweets = array() ;
			
			foreach($lesTweetsJson->{'statuses'} as $unTweetJson) {
				//On créer l'objet Tweet
				$unTweet = new Tweet() ;
				
				//On rempli l'objet Tweet
				$unTweet->setCreated_at($unTweetJson->{'created_at'}) 								;
				$unTweet->setId($unTweetJson->{'id'}) 												;
				$unTweet->setId_str($unTweetJson->{'id_str'}) 										;
				$unTweet->setTruncated($unTweetJson->{'truncated'}) 								;
				
				//Si il y a un media
				/*if(!empty($unTweetJson->{'entities'}->{'media'})) {
					//On créer l'objet Media
					$media = new Media()															;
					$media->setMedia_url($unTweetJson->{'entities'}->{'media'}->{'media_url'})		;
					
					//On créer l'objet Entitie
					$entitie = new Entitie()														;
					$entitie->setMedia($media)														;
					
					//On ajoute l'objet Entitie au tweet
					$unTweet->setEntities($entitie) 												;
				}*/
				
				$unTweet->setSource($unTweetJson->{'source'}) 										;
				$unTweet->setIn_reply_to_status_id($unTweetJson->{'in_reply_to_status_id'}) 		;
				$unTweet->setIn_reply_to_status_id_str($unTweetJson->{'in_reply_to_status_id_str'})	;
				$unTweet->setIn_reply_to_user_id($unTweetJson->{'in_reply_to_user_id'}) 			;
				$unTweet->setIn_reply_to_user_id_str($unTweetJson->{'in_reply_to_user_id_str'}) 	;
				$unTweet->setIn_reply_to_screen_name($unTweetJson->{'in_reply_to_screen_name'}) 	;
				
				//On créer l'objet Utilisateur
				$utilisateur = new User() ;
				$utilisateur->setScreen_name($unTweetJson->{'user'}->{'screen_name'}) 				;
				$utilisateur->setName($unTweetJson->{'user'}->{'name'}) 							;
				$utilisateur->setProfile_image_url($unTweetJson->{'user'}->{'profile_image_url'}) 	;
				$unTweet->setUser($utilisateur) 													;
				
				//On regarde si c'est un retweet ou non (si oui, le text contient "RT" au début)
				$isRetweet = substr($unTweetJson->{'text'}, 0, 2) 									;
				
				//Si c'est un retweet
				if($isRetweet == "RT") {
					$unTweet->setRetweet_count($unTweetJson->{'retweeted_status'}->{'retweet_count'})	;
					$unTweet->setFavorite_count($unTweetJson->{'retweeted_status'}->{'favorite_count'})	;
					$unTweet->setText(substr($unTweetJson->{'text'}, strpos($unTweetJson->{'text'}, ': ')+1, strlen($unTweetJson->{'text'}))) ;
				} else {
					$unTweet->setRetweet_count($unTweetJson->{'retweet_count'}) 						;
					$unTweet->setFavorite_count($unTweetJson->{'favorite_count'}) 						;
					$unTweet->setText($unTweetJson->{'text'}) 											;
				}
			
				//On ajoute le tweet à la liste de tweet
				$lesTweets[] = $unTweet ;
			}
			
			//On renvoie le tableau de tweets
			return $lesTweets ;
		}
		
	}
	
?>