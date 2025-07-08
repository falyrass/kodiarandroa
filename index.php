<?php

	if (isset($_GET["note"]) && $_GET["note"]==1){
		echo "Votre enregistrement a été bien effectué ! Vous pouvez vérifier votre numéro après un instant";
	} 

	if (isset($_GET["note"]) && $_GET["note"]==11){
		echo "Votre enregistrement a échoué ! Veuillez bien vérifier le formulaire";
	} 

?>

<!DOCTYPE HTML>

<html>
	<head>
		
		<title>Kodiarandroa</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" href="images/icon.png">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		<script type="text/javascript" src="assets/js/ajax.js"></script>
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
		<script type="text/javascript" src="assets/js/validate.js"></script>

	</head>

	<body class="subpage">

		<!-- Header -->
		<header id="header">
			<div class="logo"><a href="index.php">kodiarandroa<span>.com</span></a></div>
			<a href="#menu">Menu</a>
		</header>

		<!-- Navigation -->
		<nav id="menu">
			<ul class="links">
				<li><a href="#">Accueil</a></li>
				<li><a href="about.html">A propos</a></li>
				<li><a href="contact.html">Contacts</a></li>
			</ul>
		</nav>

		<section id="One" class="wrapper style3">
			<div class="inner">
				<header class="align-center">
					<p>Accueil</p>
					<h2>Enregistrez votre moto</h2>
				</header>
			</div>
		</section>

		<!-- CONTENU -->
		<section id="one" class="wrapper style2">
			<div class="inner">
				<div class="grid-style">

					<!-- SECTION D'ENREGISTREMENT -->
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Inscrivez votre moto</p>
							</header>

							<form method="POST" action="inscription.php" id="form_enregistrement" enctype="multipart/form-data">

								<p>*Nom et prénom du titulaire</p>
								<input type="text" name="titulaire" id="titulaire" required>

								<p>*CIN titulaire (12 caractères, numériques seulement)</p>
								<input type="text" name="n_cin" id="n_cin" required>

								<p>*Justificatif d'identité<br>(Scan lisible du CIN, recto-verso, inférieur à 150Ko) </p>
								<input type="file" class="c_image" name="justif_identite" id="justif_identite" required>

								<p>*Numéro moteur</p>
								<input type="text" name="num_moteur" id="num_moteur" required>

								<p>*Justificatif du moteur<br>(Scan lisible de la facture originale inférieur à 150Ko) </p>
								<input type="file" class="c_image" name="justif_moteur" id="justif_moteur" required>

								<p>*Numéro cadre</p>
								<input type="text" name="num_cadre" id="num_cadre">

								<p>Numéro matricule</p>
								<input type="text" name="num_matricule" id="num_matricule">

								<p>Descritpion de la moto</p>
								<textarea name="description"></textarea><br>

								<button type="submit" id="btn_enregistrer" class="button alt">Enregistrer</button>
							</form>	
						</div>
					</div>


					<!-- SECTION DE VERIFICATION -->

					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>Vérifiez votre numéro moteur</p>
							</header>

							<form method="POST" action="verifier.php">
								<p>Entrez votre numéro moteur</p>
								<input type="text" id="check" name="check" required><br>
								<button type="button" id="btn_check" class="button alt">Vérifier</button>
							</form>	
							<div id="resultat_verification"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<ul class="icons">
					<li><a href="contact.html" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="contact.html" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
			</div>
			<div class="copyright">
				&copy; Kodiarandroa. All rights reserved.
			</div>
		</footer>

		<!-- Scripts -->

		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>