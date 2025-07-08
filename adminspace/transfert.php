<?php 
	require("configbase.php");
	require("../functions.php");
	session_start();
	if (empty($_SESSION['pseudo_admin']) || empty($_SESSION['passwd_admin']) ) {
		header("location:index.php");
	}

	$req = $connexion -> query("SELECT date_enregistrement94267 FROM $base.`moto` WHERE id_moto94267 =".$_GET['id']);
	while ($res = $req -> fetch()) {
		$date = $res['date_enregistrement94267'];
	}

	$num_moteur = $_POST['numero_moteur'];
	$titulaire = $_POST['titulaire'];
	$cadre = $_POST['numero_cadre'];
	$cin = $_POST['numero_cin'];
	$matricule = $_POST['numero_matricule'];
	$justif_moteur = $_POST['justif_moteur'];
	$justif_identite = $_POST['justif_identite'];
	$description = $_POST['description'];

	if($_POST['action']=='valider'){
		try{
			$sql=$connexion->prepare("INSERT INTO `$base`.`real_record34126`(`id_moto34126`,`numero_moteur34126`,`nom_titulaire34126`,`date_enregistrement34126`,`numero_cadre34126`,`numero_cin34126`,`numero_matricule34126`,`justificatif_moteur34126`,`justificatif_identite34126`,`description34126`) VALUES (NULL,'$num_moteur','$titulaire','$date','$cadre','$cin','$matricule','$justif_moteur','$justif_identite','$description') ");
			$sql_exec=$sql->execute();
			$sup = $connexion -> exec("DELETE FROM $base.`moto` WHERE id_moto94267=".$_GET['id']);
			$bool = 1;
		}
		catch(Exception $e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
			$bool = 0;
		}
	}

	if($_POST['action']=='refuser'){
		try{
			$sup = $connexion -> exec("DELETE FROM $base.`moto` WHERE id_moto94267=".$_GET['id']);
			$bool = 1;
		}
		catch(Exception $e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
			$bool = 0;
		}

	}			

	header("location:plateforme.php?note=".$bool);
	$req->closeCursor();
	$sup->closeCursor();
?>