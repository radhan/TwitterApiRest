<?php
	
	class Tweet {
		
		private $contributors 				; //Tableau associatif contenant id, id_str et screen_name
		private $coordinates 				; //Tableau associatif contenant un tableau (contenant longitude et latitude) et un type
		private $created_at 				; //String contenant la date du tweet
		private $entities 					; //Tableau associatif contenant les tableaux : hashtags, urls, user_mentions
		private $favorite_count 			; //Integer indiquant le nombre de likes sur le tweet
		private $favorited					; //Boolean indiquant si le tweet a été liké par l'utilisateur connecté
		private $filter_level				; //String déterminant le niveau maximum de filtrage du tweet
		private $id							; //Int64 indiquant l'identifiant du tweet
		private $id_str						; //String représentant l'identifiant du tweet
		private $in_reply_to_screen_name	; //String contenant le nom d'utilisateur de l'auteur du tweet s'il s'agit d'une réponse
		private $in_reply_to_status_id		; //Int64 indiquant l'identifiant du tweet s'il s'agit d'une réponse
		private $in_reply_to_status_id_str	; //String représentant l'identifiant du tweet s'il s'agit d'une réponse
		private $in_reply_to_user_id		; //Int64 contenant l'identifiant de l'auteur du tweet s'il s'agit d'une réponse
		private $in_reply_to_user_id_str	; //String contenant l'identifiant de l'auteur du tweet s'il s'agit d'une réponse
		private $lang						; //String contenant la langue du tweet (ou "und" si cela ne peut pas être détecté)
		private $place						; //Tableau associatif contenant attributes, bounding_box, country, country_code, full_name, id, name, place_type, urldecode
		private $possibly_sensitive			; //Boolean indiquant si le lien dans un tweet est sensible
		private $quoted_status_id			; //Int64 indiquant l'identifiant du tweet quoté
		private $quoted_status_id_str		; //String indiquant l'identifiant du tweet quoté
		private $quoted_status				; //Objet Tweet du tweet original lorsqu'il a été quoté
		private $scopes						; //Objet
		private $retweet_count				; //Integer indiquant le nombre de retweet
		private $retweeted					; //Boolean indiquant si le tweet a été retweeté par l'utilisateur connecté
		private $retweeted_status			; //Objet Tweet représentant un tweet qui a été retweeté
		private $source						; //String contenant la source d'un tweet
		private $text						; //String contenant le texte du tweet
		private $truncated					; //Boolean déterminant si le tweet a été tronqué ou non
		private $user						; //Objet Users représentant l'utilisateur qui est l'auteur du tweet
		private $withheld_copyright			; //Boolean indiquant si le tweet a fait l'objet de droit d'auteur
		private $withheld_in_countries		; //Tableau de String contenant les initiales des pays refusés
		private $withheld_scope				; //String indiquant si c'est le status ou l'utilisateur qui est refusé
		
		public function __toString() {
			return('Cette classe permet de définir et manipuler un tweet en utilisant l\'API REST.<br/>') ;
		}
		
		public function __construct() {
			
		}
		
		public function getContributors() {
			return $this->contributors ;
		}
		
		public function setContributors($pContributors) {
			$this->contributors = $pContributors ;
		}
		
		public function getCoordinates() {
			return $this->coordinates ;
		}
		
		public function setCoordinates($pCoordinates) {
			$this->coordinates = $pCoordinates ;
		}
		
		public function getCreated_at() {
			return $this->created_at ;
		}
		
		public function setCreated_at($pCreated_at) {
			$this->created_at = $pCreated_at ;
		}
		
		public function getEntities() {
			return $this->entities ;
		}
		
		public function setEntities($pEntities) {
			$this->entities = $pEntities ;
		}
		
		public function getFavorite_count() {
			return $this->favorite_count ;
		}
		
		public function setFavorite_count($pFavorite_count) {
			$this->favorite_count = $pFavorite_count ;
		}
		
		public function getFavorited() {
			return $this->favorited ;
		}
		
		public function setFavorited($pFavorited) {
			$this->favorited = $pFavorited ;
		}
		
		public function getFilter_level() {
			return $this->filter_level ;
		}
		
		public function setFilter_level($pFilter_level) {
			$this->filter_level = $pFilter_level ;
		}
		
		public function getId() {
			return $this->id ;
		}
		
		public function setId($pId) {
			$this->id = $pId ;
		}
		
		public function getId_str() {
			return $this->id_str ;
		}
		
		public function setId_str($pId_str) {
			$this->id_str = $pId_str ;
		}
		
		public function getIn_reply_to_screen_name() {
			return $this->in_reply_to_screen_name ;
		}

		public function setIn_reply_to_screen_name($pIn_reply_to_screen_name) {
			$this->in_reply_to_screen_name = $pIn_reply_to_screen_name ;
		}

		public function getIn_reply_to_status_id() {
			return $this->in_reply_to_status_id ;
		}

		public function setIn_reply_to_status_id($pIn_reply_to_status_id) {
			$this->in_reply_to_status_id = $pIn_reply_to_status_id ;
		}

		public function getIn_reply_to_status_id_str() {
			return $this->in_reply_to_status_id_str ;
		}

		public function setIn_reply_to_status_id_str($pIn_reply_to_status_id_str) {
			$this->in_reply_to_status_id_str = $pIn_reply_to_status_id_str ;
		}

		public function getIn_reply_to_user_id() {
			return $this->in_reply_to_user_id ;
		}

		public function setIn_reply_to_user_id($pIn_reply_to_user_id) {
			$this->in_reply_to_user_id = $pIn_reply_to_user_id ;
		}

		public function getIn_reply_to_user_id_str() {
			return $this->in_reply_to_user_id_str ;
		}

		public function setIn_reply_to_user_id_str($pIn_reply_to_user_id_str) {
			$this->in_reply_to_user_id_str = $pIn_reply_to_user_id_str ;
		}

		public function getLang() {
			return $this->lang ;
		}

		public function setLang($pLang) {
			$this->lang = $pLang ;
		}

		public function getPlace() {
			return $this->place ;
		}

		public function setPlace($pPlace) {
			$this->place = $pPlace ;
		}

		public function getPossibly_sensitive() {
			return $this->possibly_sensitive ;
		}

		public function setPossibly_sensitive($pPossibly_sensitive) {
			$this->possibly_sensitive = $pPossibly_sensitive ;
		}

		public function getQuoted_status_id() {
			return $this->quoted_status_id ;
		}

		public function setQuoted_status_id($pQuoted_status_id) {
			$this->quoted_status_id = $pQuoted_status_id ;
		}

		public function getQuoted_status_id_str() {
			return $this->quoted_status_id_str ;
		}

		public function setQuoted_status_id_str($pQuoted_status_id_str) {
			$this->quoted_status_id_str = $pQuoted_status_id_str ;
		}

		public function getQuoted_status() {
			return $this->quoted_status ;
		}

		public function setQuoted_status($pQuoted_status) {
			$this->quoted_status = $pQuoted_status ;
		}

		public function getScopes() {
			return $this->scopes ;
		}

		public function setScopes($pScopes) {
			$this->scopes = $pScopes ;
		}

		public function getRetweet_count() {
			return $this->retweet_count ;
		}

		public function setRetweet_count($pRetweet_count) {
			$this->retweet_count = $pRetweet_count ;
		}

		public function getRetweeted() {
			return $this->retweeted ;
		}

		public function setRetweeted($pRetweeted) {
			$this->retweeted = $pRetweeted ;
		}

		public function getRetweeted_status() {
			return $this->retweeted_status ;
		}

		public function setRetweeted_status($pRetweeted_status) {
			$this->retweeted_status = $pRetweeted_status ;
		}

		public function getSource() {
			return $this->source ;
		}

		public function setSource($pSource) {
			$this->source = $pSource ;
		}

		public function getText() {
			return $this->text ;
		}

		public function setText($pText) {
			$this->text = $pText ;
		}

		public function getTruncated() {
			return $this->truncated ;
		}

		public function setTruncated($pTruncated) {
			$this->truncated = $pTruncated ;
		}

		public function getUser() {
			return $this->user ;
		}

		public function setUser($pUser) {
			$this->user = $pUser ;
		}

		public function getWithheld_copyright() {
			return $this->withheld_copyright ;
		}

		public function setWithheld_copyright($pWithheld_copyright) {
			$this->withheld_copyright = $pWithheld_copyright ;
		}

		public function getWithheld_in_countries() {
			return $this->withheld_in_countries ;
		}

		public function setWithheld_in_countries($pWithheld_in_countries) {
			$this->withheld_in_countries = $pWithheld_in_countries ;
		}

		public function getWithheld_scope() {
			return $this->withheld_scope ;
		}

		public function setWithheld_scope($pWithheld_scope) {
			$this->withheld_scope = $pWithheld_scope ;
		}
		
	}
	
?>