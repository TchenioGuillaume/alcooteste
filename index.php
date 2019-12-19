<?php include 'header.php'; ?>

	<header id="gtco-header" class="gtco-cover gtco-cover-sd" role="banner" style="background-image: url(images/5.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">Verifier votre état alcoolémique !</h1>
							<div class="col-md-12 text-center copyright">
								<small class="block">&copy; 2018 G.Tchénio. Tous droits réservés.</small>
								<small class="block">Créé par <a href="http://tchenioguillaume.fr" target="_blank"> G.Tchénio</a></small>
							</div>
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Entrer les informations</h3>
											<form action="cible.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Détention du permis depuis *</label>
														<select class="form-control" id="exampleFormControlSelect1" name="permis">
															 <option>Détention du permis de :</option>
															 <option>- de 3 ans</option>
															 <option>+ de 3 ans</option>
														 </select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Nom de l'alcool *</label>
														<select class="form-control" name="alcool">
																<option value="rouge" selected>Choisisez le nom de l'alcool</option>
																<option value="du vin rouge">Vin rouge (12,5 cl à 12°)</option>
																<option value="du vin blanc">Vin blanc (12,5 cl à 12°)</option>
																<option value="de la biere">Bière (25 cl à 5°)</option>
																<option value="un cocktail">Alcool distillé (3 cl à 40°)</option>
														</select>
													</div>
												</div>
												<!-- <div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Degrés d'alcool *</label>
														<input class="form-control" type="number" min="0" max="100" name="degres" placeholder="Entrer pourcentage d'alcool">
													</div>
												</div> -->
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Nombres de verre *</label>
														<select class="form-control" id="exampleFormControlSelect1" name="nombre">
															 <option>0</option>
															 <option>1</option>
															 <option>2</option>
															 <option>3</option>
															 <option>Plus</option>
														 </select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Verifier si je peux conduire">
													</div>
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
		</div>
	</header>





<?php include 'footer.php'; ?>
