<?php
	
	//On inclut et on charge l'api
	require_once('TwitterAPIExchange.php');
	
	class Size {
		
		private $h		; //Integer hauteur en pixel
		private $resize	; //String contenant la méthode de redimensionnement du media
		private $w		; //Integer largeur en pixel
		
		
		public function __construct () {
			
		}
		
		public function getH() {
			return $this->h ;
		}
		
		public function setH($pH) {
			$this->h = $pH ;
		}
		
		public function getResize() {
			return $this->resize ;
		}
		
		public function setResize($pResize) {
			$this->resize = $pResize ;
		}
		
		public function getW() {
			return $this->w ;
		}
		
		public function setW($pW) {
			$this->w = $pW ;
		}
	}
	
?>