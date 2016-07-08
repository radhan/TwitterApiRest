<?php
	require_once('classe/twitter.classe.php') ;
	
	if(isset($_POST['recherche']) && !empty($_POST['recherche'])) {
		//On déclare l'objet Twitter
		$twitter = new Twitter() ;
		
		//On récupère les tweets
		if(isset($_POST['radios']) && $_POST['radios'] == false) {
			$lesTweets = $twitter->search('@' . $_POST['recherche']) ;
		} else {
			$lesTweets = $twitter->search($_POST['recherche']) ;
		}
	}
?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<h2>Rechercher un Tweet ou un Utilisateur</h2>
					<hr>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<div id="custom-search-input">
								<form action="?page=recherche" method="POST">
									<div class="input-group col-md-12">
										<input type="text" class="search-query form-control" placeholder="Effectuer votre recherche" name="recherche" value="<?php if(!empty($_POST['recherche'])) { echo $_POST['recherche'] ; } ?>"/>
										
										<span class="input-group-btn">
											<button class="btn btn-danger" type="submit">
												<span class=" glyphicon glyphicon-search"></span>
											</button>
										</span>
									</div>
									
									<div class="row col-md-8 col-md-offset-4">
										<br>
										<input type="radio" id="radio1" name="radios" value="true" checked>
										   <label for="radio1">Tweet</label>
										<input type="radio" id="radio2" name="radios" value="false">
										   <label for="radio2">Utilisateur</label>
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

<div class="container-fluid">
	<div class="col-md-6 col-md-offset-3">
		<?php
			if(isset($_POST['recherche']) && !empty($_POST['recherche'])) {
				
				//On parcourt et on affiche les tweets
				foreach($lesTweets as $unTweet) {
		?>
					<div class="panel panel-primary">
						<div class="panel-heading"><?php echo '@' . $unTweet->getUser()->getScreen_name() . ' - ' . $unTweet->getUser()->getName() ; ?></div>
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
			}
		?>
	</div>
</div>