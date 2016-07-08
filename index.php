<?php
	session_start();
	$page = @$_GET['page'] ;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="css/style.css" /> 
		<link href="css/bootstrap.min.css" rel="stylesheet"> 
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<header>
			<div class="navbar navbar-default navbar-static-top">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="?page=accueil">WeDoGood</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="?page=accueil"><span class="glyphicon glyphicon-home"></span> Accueil</a>
						</li>
						
						<li class="dropdown menu-large">
							<a href="?page=ecrire" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pencil"></span> Ecrire un Tweet</a>				
						</li>
						
						<li class="dropdown menu-large">
							<a href="?page=tweets" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Mes Tweets</a>				
						</li>
						
						<li class="dropdown menu-large">
							<a href="?page=recherche" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Effectuer une recherche</a>
						</li>
					</ul>
				</div>
			  </div>
			</div>
		</header>
<?php 
			switch($page) 
			{	
				case "accueil"  	: $fichier = "fo/accueil.php"	; break ;
				case "ecrire"  		: $fichier = "fo/ecrire.php"	; break ;
				case "tweets" 		: $fichier = "fo/tweets.php" 	; break ;
				case "recherche" 	: $fichier = "fo/recherche.php" ; break ;
				default: $fichier = "fo/accueil.php" ;
			}
			require_once($fichier) ;
?>
	</body>
</html>