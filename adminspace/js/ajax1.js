function getXhr(){
                                var xhr = null; 
				if(window.XMLHttpRequest) // Firefox et autres
				   xhr = new XMLHttpRequest(); 
				else if(window.ActiveXObject){ // Internet Explorer 
				   try {
			                xhr = new ActiveXObject("Msxml2.XMLHTTP");
			            } catch (e) {
			                xhr = new ActiveXObject("Microsoft.XMLHTTP");
			            }
				}
				else { // XMLHttpRequest non supporté par le navigateur 
				   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
				   xhr = false; 
				} 
                    return xhr
	}

function rechercher(id,div,php) {

				id = $("#"+id).val();
				
	             var xhr = getXhr()
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						document.getElementById(div).innerHTML = xhr.responseText ;
					}
				}
				
				xhr.open("GET",php+"?id="+id,true);
				xhr.send(null);
			
                     }

function rechercher1(id,div,php) {

	             var xhr = getXhr()
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						document.getElementById(div).innerHTML = xhr.responseText ;
					}
				}
				
				xhr.open("GET",php+"?id="+id,true);
				xhr.send(null);
			
                     }                     