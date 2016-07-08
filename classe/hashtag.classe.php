<?php
	
	//On inclut et on charge l'api
	require_once('TwitterAPIExchange.php');
	
	class Hashtag {
		
		private $indices 	; //Tableau de Integer représentant la place du # et celle de la première lettre du hashtag dans le tweet
		private $text		; //String contenant le texte du hashtag
		
		public function __construct () {
			
		}
		
		public function getIndices() {
			return $this->indices ;
		}
		
		public function setIndices($pIndices) {
			$this->indices = $pIndices ;
		}
		
		public function getText() {
			return $this->text ;
		}
		
		public function setText($pText) {
			$this->text = $pText ;
		}
	}
	
?>