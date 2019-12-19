<?php include 'header.php'; ?>

	<header id="gtco-header" class="gtco-cover gtco-cover-sd" role="banner" style="background-image: url(images/3.jpg)" data-stellar-background-ratio="0.5">
		<!-- <div class="overlay"></div> --> <!-- Met le texte en sombre -->
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h3 style="color: White;">
								<?php
								// var_dump($_POST);die;
									// Cas 1 : on s'assure que tous les champs existent
									if (empty($_POST['alcool']) OR empty($_POST['permis']) OR empty($_POST['nombre'])) {
										echo "Veuillez remplir correctement le formulaire";
										echo "<br>";
										echo "<a href='index.php'>Retour au formulaire</a>";
								?>

									<!-- <form class="" action="index.php" method="post">
										<div class="row form-group">
											<div class="col-md-12">
												<input type="submit" class="btn btn-primary btn-block" value="Retour au formulaire">
											</div>
										</div>
									</form> -->
								<?php
									} else {
										echo "Vous avez bu " . $_POST['alcool'] . " et vous en avez bu " . $_POST['nombre'] . " verre(s). <br> <br>";
										if ($_POST['permis'] == "- de 3 ans") {
											if ($_POST['nombre'] < 0) {
												echo "Vous pouvez conduire en toute securité";
											 } else {
												echo "<a style='color: red;'>Vous avez le permis depuis - de 3 ans. Vous ne pouvez pas conduire en toute securité !</a><br><br>";
												echo "<p><a href='http://www.securite-routiere.gouv.fr/connaitre-les-regles/reglementation-et-sanctions/alcool' target='_blank'>Réglementation et sanctions</a></p>";
											 }
										}else {
											if ($_POST['nombre'] < 2) {
												echo "<a style='color: #00FFFF;'>Vous pouvez conduire en toute securité</a><br><br>";
											 } else {
												echo "<a style='color: red;'>Vous ne pouvez pas conduire en toute securité !</a><br><br>";
											 }
											echo "<p><a href='http://www.securite-routiere.gouv.fr/connaitre-les-regles/reglementation-et-sanctions/alcool' target='_blank'>Réglementation et sanctions</a></p>";
									 	}
									}
								?>
							</h3>

							<br><br>
							<div class="col-md-12 text-center copyright">
								<small class="block">&copy; 2018 G.Tchénio. Tous droits réservés.</small>
								<small class="block">Créé par <a href="http://tchenioguillaume.fr" target="_blank"> G.Tchénio</a></small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

<?php include 'footer.php'; ?>
