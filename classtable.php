<?php
	/**
	  * 
	  */
	 class tbl
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
	 	
	 	function __construct($name)
	 	{
	 		$this->name=$name;	
	 	}

	 	function init($id,$moteur,$titulaire,$dated,$cadre,$cin,$matricule,$j_moteur,$j_cin,$description){
	 		$this->id=$id;
	 		$this->moteur=$moteur;
	 		$this->titulaire=$titulaire;
	 		$this->dated=$dated;
	 		$this->cadre=$cadre;
	 		$this->cin=$cin;
	 		$this->matricule=$matricule;
	 		$this->j_moteur=$j_moteur;
	 		$this->j_cin=$j_cin;
	 		$this->description=$description;
	 	}
	 } 

	
?>