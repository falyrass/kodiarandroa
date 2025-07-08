<?php

$hote='localhost:3306';
$base='dbmoto';
$user='utilisateur';
$pass='5cpRA756';

try
{
	$connexion = new PDO('mysql:host='.$hote.';dbname='.$base, $user, $pass) ;
	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
	echo 'Connection failed: ' . $e->getMessage();
}

?>