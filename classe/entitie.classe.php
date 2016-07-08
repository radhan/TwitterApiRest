<?php
	
	//On inclut et on charge l'api
	require_once('TwitterAPIExchange.php');
	require_once('hashtag.classe.php') ;
	require_once('media.classe.php') ;
	
	class Entitie {
		
		private $hashtags 		; //Tableau d'objet contenant les indices et hashtags utilisés
		private $media			; //Tableau d'objet contenant les éléments médias mis en ligne
		private $urls			; //Tableau d'objet contenant les URLS des tweets
		private $user_mentions	; //Tableau d'objet contenant les personnes mentionnées dans les tweets
		
		public function __construct() {
			
		}
		
		public function getHashtags() {
			return $this->hashtags ;
		}
		
		public function setHashtags($pHashtags) {
			$this->hashtags = $pHashtags ;
		}
		
		public function getMedia() {
			return $this->media ;
		}
		
		public function setMedia($pMedia) {
			$this->media = $pMedia ;
		}
		
		public function getUrls() {
			return $this->urls ;
		}
		
		public function setUrls($pUrls) {
			$this->urls = $pUrls ;
		}
		
		public function getUser_mentions() {
			return $this->user_mentions ;
		}
		
		public function setUser_mentions($pUser_mentions) {
			$this->user_mentions = $pUser_mentions ;
		}
	}
	
?>