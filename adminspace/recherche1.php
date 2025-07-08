<?php 
	session_start();

	if (empty($_SESSION['pseudo_admin']) || empty($_SESSION['passwd_admin']) ) {
		header("location:index.php");
	}

	require_once "../classtable.php";
	require_once "../classmoto.php";

	$moto = new moto();
	$moto->id = $_GET['id'];

	$table = new tbl('real_record34126');
	$table->init("id_moto34126","numero_moteur34126","nom_titulaire34126","date_enregistrement34126","numero_cadre34126","numero_cin34126","numero_matricule34126","justificatif_moteur34126","justificatif_identite34126","description34126");

	$moto->init($table,$moto->id);


	print'<form>';
	 $moto->afficher($table,$moto->id); 
	print'</form>';

?>