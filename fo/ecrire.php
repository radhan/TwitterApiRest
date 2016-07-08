<?php
	require_once('classe/twitter.classe.php') ;
	
	if(isset($_POST['texteTweet']) && !empty($_POST['texteTweet'])) {
		//On déclare l'objet Twitter
		$twitter = new Twitter() ;
		
		//On déclare l'utilisateur
		$resultat = $twitter->ecrireTweet($_POST['texteTweet']) ;
		$resultat = json_decode($resultat) ;
	}
?>
<br>
 <div class='notifications top-left'></div>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<h2>Ecrire un Tweet</h2>
					<hr>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<div id="custom-search-input">
								<form action="?page=ecrire" method="POST">
									<div class="form-group">
										<textarea class="form-control" rows="5" name="texteTweet"></textarea>
									</div>
									<div class="col-lg-offset-5">
										<button type="submit" class="btn btn-default">Envoyer</button>
									</div>
									<div class="col-lg-offset-3">
									<?php
										if(isset($_POST['texteTweet']) && !empty($_POST['texteTweet'])) {
											if(!empty($resultat->{'id'})) {
												echo 'Le tweet a été envoyé avec succès !' ;
											} else {
												echo 'Un problème est survenu : ' . json_encode($resultat) ;
											}
										}
									?>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>