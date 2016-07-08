<?php
	
	class User {
		
		private $contributors_enabled				; //Boolean indiquant si le compte dispose du mode contributeur activé, permettant la co-écriture de tweet
		private $created_at							; //String indiquant la date de création du compte
		private $default_profile					; //Boolean indiquant si le thème et l'image de fond du compte ont été changés
		private $default_profile_image				; //Boolean indiquant si la photo de profil a été changé ou non
		private $description						; //String contenant la description du compte
		private $entities							; //Objet Entities contenant les tableaux urls et description
		private $favorites_count					; //Integer représentant le nombre de tweet aimés par l'utilisateur
		private $follow_request_sent				; //Boolean indiquant si l'utilisateur connecté a envoyé une demande de follow au second utilisateur ("null" � la place de false)
		private $following							; //Boolean indiquant si l'utilisateur connecté suit le second utilisateur ("null" à la place de false)
		private $followers_count					; //Integer représentant le nombre de followers de l'utilisateur
		private $friends_count						; //Integer représentant le nombre de following de l'utilisateur
		private $geo_enabled						; //Boolean indiquant si l'utilisateur a la possibilité de geolocaliser ses tweets
		private $id									; //Int64 représentant l'identifiant de l'utilisateur
		private $id_str								; //String représentant l'identifiant de l'utilisateur
		private $is_translator						; //Boolean indiquant si l'utilisateur fait parti de la communauté des traducteurs twitter
		private $lang								; //String représentant le code du pays
		private $listed_count						; //Integer représentant le nombre de listes dans lesquelles l'utilisateur fait parti
		private $location							; //String contenant la localisation de l'utilisateur
		private $name								; //String contenant le nom de l'utilisateur (pas le @)
		private $notifications						; //Boolean indiquant si l'utilisateur reçoit des notifications par SMS ou non
		private $profile_background_color			; //String contenant la couleur en hexadécimal du fond
		private $profile_background_image_url		; //String contenant l'url de l'image de fond
		private $profile_background_image_url_https	; //String contenant l'url de l'image de fond en https
		private $profile_background_tile			; //Boolean indiquant si l'image de fond et en mosaique
		private $profile_banner_url					; //String contenant l'url https de l'image de bannière
		private $profile_image_url					; //String contenant l'url de la photo de profil
		private $profile_image_url_https			; //String contenant l'url https de la photo de profil
		private $profile_link_color					; //String contenant la couleur en hexadécimal de l'interface twitter
		private $profile_sidebar_border_color		; //String contenant la couleur en hexadécimal des bords de la barre latérale
		private $profile_sidebar_fill_color			; //String contenant la couleur en hexadécimal du fond de la barre latérale
		private $profile_text_color					; //String contenant la couleur hexadécimal des textes de l'interface twitter
		private $profile_use_background_image		; //Boolean indiquant que l'utilisateur a utilisé une image de fond qu'il a uploadé
		private $protected							; //Boolean indiquant si l'utilisateur a protégé ses tweets
		private $screen_name						; //String contenant le nom d'utilisateur (le @)
		private $show_all_inline_media				; //Boolean indiquant si l'utilisateur veut voir les medias (photos/videos)
		private $status								; //Objet Tweet des tweets ou retweets de l'utilisateur
		private $statuses_count						; //Integer représentant le nombre de tweets (retweets inclus) de l'utilisateur
		private $time_zone							; //String décrivant le fuseau horaire de l'utilisateur
		private $url								; //String contenant l'url associé au profil
		private $utc_offset							; //Integer indiquant le décalage horaire en secondes
		private $verified							; //Boolean indiquant si le compte est vérifié ou non
		private $withheld_in_countries				; //Tableau de String contenant les initiales des pays refusés
		private $withheld_scope						; //String indiquant si c'est le status ou l'utilisateur qui est refusé
		
		
		public function __toString() {
			return('Cette classe permet de d�finir et manipuler un utilisateur en utilisant l\'API REST.<br/>') ;
		}
		
		public function __construct() {
			
		}
		
		public function getContributors_enabled() {
			return $this->contributors_enabled ;
		}

		public function setContributors_enabled($pContributors_enabled) {
			$this->contributors_enabled = $pContributors_enabled ;
		}

		public function getCreated_at() {
			return $this->created_at ;
		}

		public function setCreated_at($pCreated_at) {
			$this->created_at = $pCreated_at ;
		}

		public function getDefault_profile() {
			return $this->default_profile ;
		}

		public function setDefault_profile($pDefault_profile) {
			$this->default_profile = $pDefault_profile ;
		}

		public function getDefault_profile_image() {
			return $this->default_profile_image ;
		}

		public function setDefault_profile_image($pDefault_profile_image) {
			$this->default_profile_image = $pDefault_profile_image ;
		}

		public function getDescription() {
			return $this->description ;
		}

		public function setDescription($pDescription) {
			$this->description = $pDescription ;
		}

		public function getEntities() {
			return $this->entities ;
		}

		public function setEntities($pEntities) {
			$this->entities = $pEntities ;
		}

		public function getFavorites_count() {
			return $this->favorites_count ;
		}

		public function setFavorites_count($pFavorites_count) {
			$this->favorites_count = $pFavorites_count ;
		}

		public function getFollow_request_sent() {
			return $this->follow_request_sent ;
		}

		public function setFollow_request_sent($pFollow_request_sent) {
			$this->follow_request_sent = $pFollow_request_sent ;
		}

		public function getFollowing() {
			return $this->following ;
		}

		public function setFollowing($pFollowing) {
			$this->following = $pFollowing ;
		}

		public function getFollowers_count() {
			return $this->followers_count ;
		}

		public function setFollowers_count($pFollowers_count) {
			$this->followers_count = $pFollowers_count ;
		}

		public function getFriends_count() {
			return $this->friends_count ;
		}

		public function setFriends_count($pFriends_count) {
			$this->friends_count = $pFriends_count ;
		}

		public function getGeo_enabled() {
			return $this->geo_enabled ;
		}

		public function setGeo_enabled($pGeo_enabled) {
			$this->geo_enabled = $pGeo_enabled ;
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

		public function getIs_translator() {
			return $this->is_translator ;
		}

		public function setIs_translator($pIs_translator) {
			$this->is_translator = $pIs_translator ;
		}

		public function getLang() {
			return $this->lang ;
		}

		public function setLang($pLang) {
			$this->lang = $pLang ;
		}

		public function getListed_count() {
			return $this->listed_count ;
		}

		public function setListed_count($pListed_count) {
			$this->listed_count = $pListed_count ;
		}

		public function getLocation() {
			return $this->location ;
		}

		public function setLocation($pLocation) {
			$this->location = $pLocation ;
		}

		public function getName() {
			return $this->name ;
		}

		public function setName($pName) {
			$this->name = $pName ;
		}

		public function getNotifications() {
			return $this->notifications ;
		}

		public function setNotifications($pNotifications) {
			$this->notifications = $pNotifications ;
		}

		public function getProfile_background_color() {
			return $this->profile_background_color ;
		}

		public function setProfile_background_color($pProfile_background_color) {
			$this->profile_background_color = $pProfile_background_color ;
		}

		public function getProfile_background_image_url() {
			return $this->profile_background_image_url ;
		}

		public function setProfile_background_image_url($pProfile_background_image_url) {
			$this->profile_background_image_url = $pProfile_background_image_url ;
		}

		public function getProfile_background_image_url_https() {
			return $this->profile_background_image_url_https ;
		}

		public function setProfile_background_image_url_https($pProfile_background_image_url_https) {
			$this->profile_background_image_url_https = $pProfile_background_image_url_https ;
		}

		public function getProfile_background_tile() {
			return $this->profile_background_tile ;
		}

		public function setProfile_background_tile($pProfile_background_tile) {
			$this->profile_background_tile = $pProfile_background_tile ;
		}

		public function getProfile_banner_url() {
			return $this->profile_banner_url ;
		}

		public function setProfile_banner_url($pProfile_banner_url) {
			$this->profile_banner_url = $pProfile_banner_url ;
		}

		public function getProfile_image_url() {
			return $this->profile_image_url ;
		}

		public function setProfile_image_url($pProfile_image_url) {
			$this->profile_image_url = $pProfile_image_url ;
		}

		public function getProfile_image_url_https() {
			return $this->profile_image_url_https ;
		}

		public function setProfile_image_url_https($pProfile_image_url_https) {
			$this->profile_image_url_https = $pProfile_image_url_https;
		}

		public function getProfile_link_color() {
			return $this->profile_link_color ;
		}

		public function setProfile_link_color($pProfile_link_color) {
			$this->profile_link_color = $pProfile_link_color ;
		}

		public function getProfile_sidebar_border_color() {
			return $this->profile_sidebar_border_color ;
		}

		public function setProfile_sidebar_border_color($pProfile_sidebar_border_color) {
			$this->profile_sidebar_border_color = $pProfile_sidebar_border_color ;
		}

		public function getProfile_sidebar_fill_color() {
			return $this->profile_sidebar_fill_color ;
		}

		public function setProfile_sidebar_fill_color($pProfile_sidebar_fill_color) {
			$this->profile_sidebar_fill_color = $pProfile_sidebar_fill_color ;
		}

		public function getProfile_text_color() {
			return $this->profile_text_color ;
		}

		public function setProfile_text_color($pProfile_text_color) {
			$this->profile_text_color = $pProfile_text_color ;
		}

		public function getProfile_use_background_image() {
			return $this->profile_use_background_image ;
		}

		public function setProfile_use_background_image($pProfile_use_background_image) {
			$this->profile_use_background_image = $pProfile_use_background_image ;
		}

		public function getProtected() {
			return $this->protected ;
		}

		public function setProtected($pProtected) {
			$this->protected = $pProtected ;
		}

		public function getScreen_name() {
			return $this->screen_name ;
		}

		public function setScreen_name($pScreen_name) {
			$this->screen_name = $pScreen_name ;
		}

		public function getShow_all_inline_media() {
			return $this->show_all_inline_media ;
		}

		public function setShow_all_inline_media($pShow_all_inline_media) {
			$this->show_all_inline_media = $pShow_all_inline_media ;
		}

		public function getStatus() {
			return $this->status ;
		}

		public function setStatus($pStatus) {
			$this->status = $pStatus ;
		}

		public function getStatuses_count() {
			return $this->statuses_count ;
		}

		public function setStatuses_count($pStatuses_count) {
			$this->statuses_count = $pStatuses_count ;
		}

		public function getTime_zone() {
			return $this->time_zone ;
		}

		public function setTime_zone($pTime_zone) {
			$this->time_zone = $pTime_zone ;
		}

		public function getUrl() {
			return $this->url ;
		}

		public function setUrl($pUrl) {
			$this->url = $pUrl ;
		}

		public function getUtc_offset() {
			return $this->utc_offset ;
		}

		public function setUtc_offset($pUtc_offset) {
			$this->utc_offset = $pUtc_offset ;
		}

		public function getVerified() {
			return $this->verified ;
		}

		public function setVerified($pVerified) {
			$this->verified = $pVerified ;
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

		public function setWithheld_scope($withheld_scope) {
			$this->withheld_scope = $withheld_scope;
		}
	}
	
?>