<?php

	require("functions.php");

	class moto 
	{
		public $id;
		public $moteur;
		public $titulaire;
		public $dated;
		public $cadre;
		public $cin;
		public $matricule;
		public $j_moteur;
		public $j_cin;
		public $description;
		
		function __construct()
		{
			
		}

		function inscription(){
			include("configbase.php");
			$date = date('Y-m-d h:m:s') ;
			try{
				$sql=$connexion->prepare("INSERT INTO `$base`.`moto`(`id_moto94267`,`numero_moteur94267`,`nom_titulaire94267`,`date_enregistrement94267`,`numero_cadre94267`,`numero_cin94267`,`numero_matricule94267`,`justificatif_moteur`,`justificatif_identite`,`description94267`) VALUES (NULL,'$this->moteur','$this->titulaire','$date','$this->cadre','$this->cin','$this->matricule','$this->justif_moteur','$this->justif_identite','$this->description') ");

				$sql_exec=$sql->execute();
				$sql->closeCursor();
				return true;
			}catch(PDOException $e){
				return false;
			}
		}

		function verifier(){
			include("configbase.php");

			//$ip = getenv("REMOTE_ADDR") ;

			$sql = "SELECT * FROM $base.`real_record34126` WHERE numero_moteur34126=:num";

			$sql_prep = $connexion->prepare($sql);

			$ar_val = array('num'=>$this->moteur);

			$sql_prep->execute($ar_val);

			$sql1 = "SELECT COUNT(*) as nbrow FROM $base.`real_record34126` WHERE numero_moteur34126=:num";

			$sql1_prep=$connexion->prepare($sql1);

			$sql1_prep->execute($ar_val);

			$row = $sql1_prep -> fetch();

			if ($donnees = $sql_prep->fetch()){

			if ($row['nbrow']==1) {
				$resultat = "Le numéro ".$donnees['numero_moteur34126']. " est titré à ".$donnees['nom_titulaire34126'];
			}

			else {
				$resultat = "Ce numéro est en statut jaune, plusieurs personnes ont déclaré titulaire de ce numéro.";
			}

			} else $resultat = "Ce numéro n'est titré à aucune personne.";

			echo "<p>".$resultat."</p>";
			$sql_prep->closeCursor();
			$sql1_prep->closeCursor();
		}

		function init($table,$id){
			require_once "classtable.php";
			require "configbase.php";

			$sql="SELECT * FROM $base.`$table->name` where $table->id=:id";
			$sql_prep=$connexion->prepare($sql);
			$ar_val = array('id'=>$id);
			$sql_prep->execute($ar_val);
			$row=$sql_prep->fetch();

			$this->moteur = $row[$table->moteur];
			$this->titulaire = $row[$table->titulaire];
			$this->dated = $row[$table->dated];
			$this->cadre = $row[$table->cadre];
			$this->cin = $row[$table->cin];
			$this->matricule = $row[$table->matricule];
			$this->j_moteur = $row[$table->j_moteur];
			$this->j_cin = $row[$table->j_cin];
			$this->description = $row[$table->description];

		}

		function afficher($table,$id){
			require "configbase.php";
			$scr_img = "../uploads/";
			$sql=$connexion->query("SELECT * FROM $base.`$table->name` WHERE '$table->id'='$this->id' ");
			$donnee=$sql->fetch();

?>

		<div class="form-group">
    		<label>Nom titulaire</label>
    		<input type="text" name='titulaire' class="form-control" value="<?php print $this->titulaire; ?>" >
  		</div>

		<div class="form-group">
    		<label>Numero CIN</label>
    		<input type="text" name='numero_cin' class="form-control" value="<?php print $this->cin ?>" >
  		</div>

 		<div class="form-group">
    		<label>Justificatif CIN</label>
    		<input type="text" name='justif_identite' class="form-control" value="<?php print $this->j_cin; ?>" >
    		<a href="<?php print $scr_img.$this->j_cin; ?>" target="_blank"><img class="img-thumbnail" width="200" height="100" src="<?php print $scr_img.$this->j_cin; ?>"></a>
  		</div> 		

		<div class="form-group">
    		<label>Numero moteur</label>
    		<input type="text" name='numero_moteur' class="form-control" value="<?php print $this->moteur ;?>" >
  		</div>

  		<div class="form-group">
			<label>Justificatif moteur</label>
			<input type="text" name="justif_moteur" class="form-control" value="<?php print $this->j_moteur; ?>">
			<a href="<?php print $scr_img.$this->j_moteur; ?>"target="_blank"><img class="img-thumbnail" width="200" height="100" src="<?php print $scr_img.$this->j_moteur; ?>"></a>
			</div>

		<div class="form-group">
			<label>Numéro cadre</label>
			<input type ='text' class="form-control" name='numero_cadre' value="<?php print $this->cadre; ?>"> 
		</div>

		<div class="form-group">
			<label>Numéro matricule</label>
			<input type ='text' class="form-control" name='numero_matricule' value="<?php print $this->matricule; ?>">
		</div>

		 <div class="form-group">
		 	<label>Description</label>
		 	<textarea class="form-control" name="description"><?php print $this->description; ?></textarea>
		 </div>
		 
			<?php
			$sql->closeCursor();
		}



	}

	
?>