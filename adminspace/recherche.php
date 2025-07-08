<?php 
	
	session_start();

	if (empty($_SESSION['pseudo_admin']) || empty($_SESSION['passwd_admin']) ) {
		header("location:index.php");
	}

	require "../classmoto.php";
	require "../classtable.php";

	$moto = new moto();
	$moto->id = $_GET['id'];

	$table = new tbl('moto');
	$table->init("id_moto94267","numero_moteur94267","nom_titulaire94267","date_enregistrement94267","numero_cadre94267","numero_cin94267","numero_matricule94267","justificatif_moteur","justificatif_identite","description94267");

	$moto->init($table,$moto->id);
?>

<form method="post" action="transfert.php?id=<?php echo $moto->id; ?>" >
	<?php $moto->afficher($table,$moto->id); ?>
	<button type="submit" name="action" class="btn btn-primary" onclick="if(!confirm('Vous confirmez?')){return false;}" value="valider">Valider</button>
	<button type="submit" name="action" class="btn btn-default" onclick="if(!confirm('Vous confirmez?')){return false;}" value="refuser">Refuser</button>
</form>
