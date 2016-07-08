<?php
	$xml = new SimpleXMLElement('identifications.xml', Null, True);
	
	if(isset($_POST['consumerKey']) && isset($_POST['consumerSecret'])) {
		$xml->consumerKey = $_POST['consumerKey'] ;
		$xml->consumerSecret = $_POST['consumerSecret']	;
		$xml->asXML('identifications.xml') ;
	}
?>
<div class="container-fluid">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">Bienvenue</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-xs-12">
						<p>
							<b>Bienvenue sur la plateforme Twitter de WeDoGood !</b>
							
							<br/><br/>
							Afin de pouvoir utiliser cette plateforme au mieux, il est nécessaire d'avoir
							
							<a href="https://apps.twitter.com/">créer une application sur Twitter</a> afin de récupérer
							les différentes clés permettant de déverouiller l'utilisation de la plateforme.
							<br/><br/>
							
							Par défaut, une application a été créée et les clés permettant de faire fonctionner l'application
							sont les suivantes :
							<br/><br/>
							
							<form action="?page=accueil" method="POST">
								<label>Consumer Key : </label>
								<input type="text" id="consumerKey" name="consumerKey" value="<?php echo $xml->consumerKey ; ?>" />
								
								<label class="marge2">Consumer Secret : </label>
								<input type="text" name="consumerSecret" value="<?php echo $xml->consumerSecret ; ?>" />
								
								<button type="submit" class="marge2 btn btn-default">
									<span class="glyphicon glyphicon-refresh"></span> Mettre à jour
								</button>
							</form>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>