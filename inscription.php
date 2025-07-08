<?php

require "classmoto.php";
require "classimage.php";

//UPLOAD IMAGE
$target_dir = "uploads/";

$new_moto = new moto();

// SCRIPT TITULAIRE
$new_moto->titulaire = strtoupper($_POST['titulaire']);

// SCRIPT NUM MOTEUR
$new_moto->moteur = str_replace(' ','',$_POST['num_moteur']);
$new_moto->moteur = strtoupper($new_moto->moteur);

// SCRIPT CIN
$new_moto->cin = str_replace(' ','',$_POST['n_cin']);

// SCRIPT CADRE
$new_moto->cadre = str_replace(' ','',$_POST['num_cadre']);
$new_moto->cadre = strtoupper($new_moto->cadre);

//SCRIPT MATRICULE
$new_moto->matricule = str_replace(' ','',$_POST['num_matricule']);
$new_moto->matricule = strtoupper($new_moto->matricule);

// DESCRIPTION DE LA MOTO
$new_moto->description = $_POST['description'];

//TRAITEMENT JUSTIFICATIF MOTEUR
$nom_image = $new_moto->moteur.$new_moto->cin ;
$nom_image = md5($nom_image);

// TRAITEMENT JUSTIFICATIF IDENTITE
$nom_image1 = $new_moto->cin.$new_moto->moteur;
$nom_image1 = md5($nom_image1);

// CREATION IMAGE
$new_image = new c_image();
$new_image->destination = $target_dir;
$new_image->nouveaunom = $nom_image;
$new_image->taille = 150000;
$new_image->nameid = 'justif_moteur';


$new_image1 = new c_image();
$new_image1->destination = $target_dir;
$new_image1->nouveaunom = $nom_image1;
$new_image1->taille = 150000;
$new_image1->nameid = 'justif_identite';


if( $new_image->verifier_image() && $new_image1->verifier_image() ){
	$new_image->inserer_image();
	$new_image1->inserer_image();
} else{
	header("location:index.php?note=11");
}


$new_moto->justif_moteur = $new_image->nouveaunom.".".$new_image->get_filetype();
$new_moto->justif_identite = $new_image1->nouveaunom.".".$new_image1->get_filetype();

if($new_moto->inscription()){
	header("location:index.php?note=1");
} else header("location:index.php?note=11");

?>
