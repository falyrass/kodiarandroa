<?php
include("classmoto.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>dbmotogasy</title>
	<meta charset="utf-8" lang="fr">
</head>
<body>
<div id="tete"></div>
<div id="centre">
	<form name="verification" method="post" action="verifier.php">
	Vérifier:
	<input type="text" name="check">
	<button type="submit">Vérifier</button>
	</form>

	<form name="inscription" method="post" action="inscription.php">
	Nom du titulaire:
	<input type="text" name="titulaire"> <br>
	Numero moteur:
	<input type="text" name="num_moteur"><br>
	<button type="submit">Inscription</button>
	</form>
</div>
<div id="footer"></div>
</body>
</html>