<?php
	require "configbase.php";
			
	$pseudo=$_POST['pseudo'];
	$mdp=md5($_POST['passwd']);

	//RECHERCHE DE L'UTILISATEUR
	$sql_user="SELECT * FROM $base.`dbm_admin` where pseudo_admin=:pseudo && passwd_admin=:mdp ";
	$sql_user_prep=$connexion->prepare($sql_user);
	$ar_val = array('pseudo'=>$pseudo, 'mdp'=>$mdp);
	$sql_user_prep->execute($ar_val);
	$req_user=$sql_user_prep->fetch();

	//TEST COMBINAISON
	if ($req_user['pseudo_admin'] == $pseudo && $req_user['passwd_admin'] == $mdp) {
		setcookie('pseudo_admin',$pseudo,time()+60*60*7);
		setcookie('passwd_admin',$mdp,time()+60*60*7);

		//CREATION SESSION
		session_start();
		$_SESSION['pseudo_admin']=$req_user['pseudo_admin'];
		$_SESSION['passwd_admin']=$req_user['passwd_admin'];
		header("location:plateforme.php?"."uk".$req_user['id_admin']);

	}

	//ERREUR:REFAIRE LOGIN 
	else{
		header("location:../adminspace?"."combinaison incorrect,reesayez.");
	}
?>