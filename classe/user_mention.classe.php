<?php
	
	//On inclut et on charge l'api
	require_once('TwitterAPIExchange.php');
	
	class User_Mention {
		
		private $id				; //Int64 identifiant de l'utilisateur mentionné
		private $id_str			; //String identifiant de l'utilisateur mentionné
		private $indices		; //Tableau de Integer indiquant l'endroit où commence et où fini la mention de l'utilisateur
		private $name			; //String nom d'utilisateur de l'utilisateur mentionné (pas le @)
		private $screen_name	; //String nom d'utilisateur de l'utilisateur mentionné (@)
		
		public function __construct() {
			
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
		
		public function getName() {
			return $this->name ;
		}

		public function setName($pName) {
			$this->name = $pName ;
		}
		
		public function getScreen_name() {
			return $this->screen_name ;
		}

		public function setScreen_name($pScreen_name) {
			$this->screen_name = $pScreen_name ;
		}
	}
	
?>