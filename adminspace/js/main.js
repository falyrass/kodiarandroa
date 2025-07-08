
$(document).ready(function(){
	$("input[name='txt_find']").attr({
		"placeholder":"Recherche",
		"class":"form-control"
	})

	$("#num_moteur").attr({
		"class":"list-group-item"
	})

	$("input[name='txt_find']").keyup(function(){
		if ($(this).val()!='') {
			rechercher($(this).val(),'contenu','pagerecherche.php');
		} else return false;
	})

});