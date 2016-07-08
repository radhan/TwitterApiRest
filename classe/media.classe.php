<?php
	
	//On inclut et on charge l'api
	require_once('TwitterAPIExchange.php') ;
	require_once('sizes.classe.php') ;
	
	class Media {
		
		private $display_url 			; //String contenant l'url direct du media
		private $expanded_url			; //String contenant l'url indirect du media
		private $id						; //Int64 identifiant du media
		private $id_str					; //String identifiant du media
		private $indices				; //Tableau de Integer indiquant l'endroit où commence et où fini le lien de l'image
		private $media_url				; //String contenant le lien direct de l'image
		private $media_url_https		; //String contenant le lien https direct de l'image
		private $sizes					; //Objet size représentant les tailles disponibles du media
		private $source_status_id		; //Int64 identifiant du tweet original contenant le media
		private $source_status_id_str	; //String identifiant du tweet original contenant le media
		private $type					; //String type du media (photo, video)
		private $url					; //String contenant l'url raccourcie du media
		
		public function __construct () {
			
		}
		
		public function getDisplay_url() {
			return $this->display_url ;
		}

		public function setDisplay_url($pDisplay_url) {
			$this->display_url = $pDisplay_url ;
		}

		public function getExpanded_url() {
			return $this->expanded_url ;
		}

		public function setExpanded_url($pExpanded_url) {
			$this->expanded_url = $pExpanded_url ;
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

		public function getIndices() {
			return $this->indices ;
		}

		public function setIndices($pIndices) {
			$this->indices = $pIndices ;
		}

		public function getMedia_url() {
			return $this->media_url ;
		}

		public function setMedia_url($pMedia_url) {
			$this->media_url = $pMedia_url ;
		}

		public function getMedia_url_https() {
			return $this->media_url_https ;
		}

		public function setMedia_url_https($pMedia_url_https) {
			$this->media_url_https = $pMedia_url_https ;
		}

		public function getSizes() {
			return $this->sizes ;
		}

		public function setSizes($pSizes) {
			$this->sizes = $pSizes ;
		}

		public function getSource_status_id() {
			return $this->source_status_id ;
		}

		public function setSource_status_id($pSource_status_id) {
			$this->source_status_id = $pSource_status_id ;
		}

		public function getSource_status_id_str() {
			return $this->source_status_id_str ;
		}

		public function setSource_status_id_str($pSource_status_id_str) {
			$this->source_status_id_str = $pSource_status_id_str ;
		}

		public function getType() {
			return $this->type ;
		}

		public function setType($pType) {
			$this->type = $pType ;
		}

		public function getUrl() {
			return $this->url ;
		}

		public function setUrl($pUrl) {
			$this->url = $pUrl ;
		}
	}
	
?>