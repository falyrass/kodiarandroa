<?php 
include("classmoto.php");
$test = new moto();
$test->moteur = strtoupper($_GET['id']);
$test->moteur = str_replace(' ', '', $test->moteur);
$test->verifier();
?>