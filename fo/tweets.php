<?php
	require_once('classe/user.classe.php') ;
	require_once('classe/twitter.classe.php') ;
	
	//On déclare l'objet Twitter
	$twitter = new Twitter() ;
	
	//On déclare l'utilisateur
	$utilisateur = new User() ;
	$utilisateur->setScreen_name('wedogood_co') ;
	
	//On récupère les tweets de l'utilisateur
	$lesTweets = $twitter->getTweetsByUser($utilisateur) ;
?>
<div class="container-fluid">
	<div class="col-md-6 col-md-offset-3">
		<?php	
			//On parcourt et on affiche les tweets
			foreach($lesTweets as $unTweet) {
		?>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<?php echo '@' . $unTweet->getUser()->getScreen_name() . ' - ' . $unTweet->getUser()->getName() ; ?>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="form-group col-xs-2">
								<img src="<?php echo $unTweet->getUser()->getProfile_image_url() ; ?>" alt="photo profil twitter"/>
							</div>
							<div class="form-group col-xs-10">
								<?php echo $unTweet->getText() ; ?>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-offset-8">
									<b>Retweet :</b> <?php echo $unTweet->getRetweet_count(); ?>
									<b>Favoris :</b> <?php echo $unTweet->getFavorite_count(); ?>
							</div>
						</div>
					</div>
				</div>
		<?php
			}
		?>
	</div>
</div>