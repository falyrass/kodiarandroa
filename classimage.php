<?php 
	/**
	 * 
	 */
	class c_image
	{
		public $nouveaunom;
		public $destination;
		public $taille;
		public $nameid;

		
		function __construct()
		{
			# code...
		}

		function get_filetype(){
			return strtolower(pathinfo($this->destination . basename($_FILES[$this->nameid]["name"]),PATHINFO_EXTENSION));
		}

		function verifier_image(){

			$bool = 1;
			$target_file = $this->destination . basename($_FILES[$this->nameid]["name"]);
			$imageFileType = $this->get_filetype();
		
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
    			$check = getimagesize($_FILES[$this->nameid]["tmp_name"]);
    			if($check === false) {
        		//"Veuillez insérer un fichier image.";
        		$bool = 0;
    		}

			}
			// Check if file already exists
			if (file_exists($target_file)) {
    			//$note = $note."Ce fichier existe déja.\n" ;
    			$bool = 0;
			}
			// Check file size
			if ($_FILES[$this->nameid]["size"] > $this->taille) {
    			//"La taille de l'image doit être inférieure à 150ko.";
    			$bool = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    			//$note = $note."Seul les formats jpeg et png sont acceptés.\n";
    			$bool = 0;
			}

			if ($bool == 1 ) {
				return true;
			} else return false;

		}

		function inserer_image(){

			$imageFileType = $this->get_filetype();
			$target_file = $this->destination.$this->nouveaunom.".".$imageFileType;
			move_uploaded_file($_FILES[$this->nameid]["tmp_name"], $target_file) ;

		}
	}
	
?>