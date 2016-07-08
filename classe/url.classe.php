<?php
	
	//On inclut et on charge l'api
	require_once('TwitterAPIExchange.php');
	
	class Url {
		
		private $display_url 	; //String contenant l'url direct du media
		private $expanded_url	; //String contenant l'url indirect du media
		private $indices		; //Tableau de Integer indiquant l'endroit où commence et où fini le lien de l'image
		private $url			; //String contenant l'url raccourcie du media
		
		public function __construct() {
			
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
		
		public function getIndices() {
			return $this->indices ;
		}

		public function setIndices($pIndices) {
			$this->indices = $pIndices ;
		}
		
		public function getUrl() {
			return $this->url ;
		}

		public function setUrl($pUrl) {
			$this->url = $pUrl ;
		}
	}
	
?>