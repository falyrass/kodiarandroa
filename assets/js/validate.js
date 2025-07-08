
function verifier_image(id){

	var image = document.getElementById(id).files[0];
	if(image.type!='image/jpeg' && image.type!='image/png'){
		alert(`Le format de l'image est invalide. Veuillez entrer un format png ou jpeg.`);
		document.getElementById(id).value='';											
	}
	if(image.size>150000){
		alert(`La taille de l'image doit être inférieure à 150 Ko.`);
		document.getElementById(id).value='';
	}										
									
}

$(document).ready(function(){
  
	// CLIC BOUTTON VERIFIER
  $("#btn_check").click(function(){
  	var pat = new RegExp("(?=.*[a-zA-Z])(?=.*[0-9]).{5,16}");
  	var res = pat.test($('#check').val());

  	if($('#check').val()==''){
		alert('Veuillez entrer le numéro à vérifier');
		return false;
	};

	if (!res) {
		alert("Entrez un numéro moteur valide.");
		return false;
	}

		rechercher($('#check').val(),'resultat_verification','verifier.php');
	});

  // CLIC ENREGISTRER

  $("#btn_enregistrer").click(function(){
  		if($('#titulaire').val()=='' || $('#num_moteur').val()=='' || $('#num_cadre').val()=='' || $('#n_cin').val()=='' || document.getElementById('justif_moteur').value=='' || document.getElementById('justif_identite').value==''){
			alert('Veuillez remplir le formulaire');
			return false;
		};
			if(!confirm('Vous confirmez?\n'+$('#titulaire').val()+'\n'+$('#n_cin').val()+'\n'+$('#num_moteur').val()+'\n'+$('#num_cadre').val()+'\n'+$('#num_matricule').val() )){
				return false;
			};
										
  })

  // Image 

$(".c_image").change(function(){
  verifier_image($(this).attr("id"));
})

  // LABEL NOM
  $("input[name='titulaire']").attr({
  		"placeholder":"ex : RAKOTO HERY",
  		"minlength":"4",
  		"maxlength":"40",
  		"pattern":"^[a-zA-Z_ ]*$",
  		"title":"Veuillez entrer un nom valide."
  	})

  // LABEL CIN
   $("input[name='n_cin']").attr({
  		"placeholder":"ex : 101012345678",
  		"maxlength":"12",
  		"minlength":"12",
  		"pattern":"[0-9]{12}",
  		"title":"Entrer un numéro CIN correct."
  	}) 

   // CLASS IMAGE
   $(".c_image").attr({
   	"accept":".jpeg,.jpg,.png"
   })

   // LABEL NUMERO MOTEUR
  $("input[name='num_moteur']").attr({
  		"placeholder":"ex : 4DM001002",
  		"minlength":"5",
  		"maxlength":"16",
  		"pattern":"^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]?).{5,16}$",
  		"title":"Entrez un numéro moteur valide."
  	})

   // LABEL NUMERO CADRE
  $("input[name='num_cadre']").attr({
  		"placeholder":"ex : 4DM001002",
  		"minlength":"5",
  		"maxlength":"16",
  		"pattern":"^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]?).{5,16}$",
  		"title":"Entrez un numéro cadre valide."
  	})

  // LABEL MATRICULE
  $("input[name='num_matricule']").attr({
  		"placeholder":"ex : 1010WWT",
  		"minlength":"5",
  		"maxlength":"10",
  		"pattern":"^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]?).{5,16}$",
  		"title":"Entrez un numéro matricule valide."
  	})  

   // LABEL NUMERO MOTEUR VERIFIER
  $("input[name='check']").attr({
  		"placeholder":"ex : 4DM001002",
  		"minlength":"5",
  		"maxlength":"16",
      "pattern":"^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]?).{5,16}$",
  		"title":"Entrez un numéro moteur valide."
  	})

    // TEXTAREA DESCRIPTION 
  $("textarea[name='description']").attr({
      "placeholder":"Ajoutez une description de la moto : marque, couleur etc...",
      "maxlength":"100",
      "style":"resize:none"
    })	 	  
});
