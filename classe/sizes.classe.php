<?php
	
	//On inclut et on charge l'api
	require_once('TwitterAPIExchange.php') ;
	require_once('size.classe.php') ;
	
	class Sizes {
		
		private $thumb	; //Objet Size
		private $large	; //Objet Size
		private $medium	; //Objet Size
		private $small	; //Objet Size
		
		public function __construct () {
			
		}
		
		public function getThumb() {
			return $this->thumb ;
		}
		
		public function setThumb($pThumb) {
			$this->thumb = $pThumb ;
		}
		
		public function getLarge() {
			return $this->large ;
		}
		
		public function setLarge($pLarge) {
			$this->large = $pLarge ;
		}
		
		public function getMedium() {
			return $this->medium ;
		}
		
		public function setMedium($pMedium) {
			$this->medium = $pMedium ;
		}
		
		public function getSmall() {
			return $this->small ;
		}
		
		public function setSmall() {
			$this->small = $pSmall ;
		}
	}
	
?>