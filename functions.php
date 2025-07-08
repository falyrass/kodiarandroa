<?php 

	function nombre($table){
		require "configbase.php" ;
		$sql = $connexion -> query("SELECT COUNT(*) as nbrow FROM $base.`$table`");
		$row = $sql -> fetch();
		return $row['nbrow'];
	}

?>