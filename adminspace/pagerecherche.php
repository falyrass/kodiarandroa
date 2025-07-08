<?php

  session_start();

  if (empty($_SESSION['pseudo_admin']) || empty($_SESSION['passwd_admin']) ) {
    header("location:index.php");
  }
	
  require "configbase.php";

  $find = strtoupper($_GET['id']);
	$sql=$connexion->query("SELECT * FROM $base.`real_record34126` WHERE nom_titulaire34126 LIKE '%$find%' OR numero_moteur34126 LIKE '%$find%' ");
?>
	<table class="table">
  	<thead>
    	<tr>
      	<th scope="col">ID</th>
      	<th scope="col">Numéro moteur</th>
      	<th scope="col">Nom</th>
      	<th scope="col">#</th>
    	</tr>
  	</thead>
  	<tbody>
<?php

	while ( $donnee = $sql -> fetch() ) {
		?>
  
    <tr>
      <th scope="row"><?php print $donnee['id_moto34126']; ?></th>
      <td><?php print $donnee['numero_moteur34126']; ?></td>
      <td><?php print $donnee['nom_titulaire34126']; ?></td>
      <td><button type="button" class=" btn btn-default" onclick="rechercher('<?php print $donnee['id_moto34126']; ?>','contenu','recherche1.php')">Voir</button></td>
    </tr>

		<?php
	}
	 $sql->closeCursor();
 ?>
   	</tbody>
	</table>