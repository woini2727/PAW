document.addEventListener("DOMContentLoaded", function() {
	hora();
			function hora(){
		     	if (window.XMLHttpRequest) {
			    // code for modern browsers
				   
				    var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {
						    if (this.readyState == 4 && this.status == 200) {
						   
						      	document.getElementById('hora').innerHTML =xhttp.responseText;
						      	setTimeout(hora(),1000);
						      	
						    }else if( this.status == 404){
						    	alert("Servidor no responde, Reintentando...");
						    	setTimeout(hora(),2000);
						    }
						  
					    }
			    xhttp.open("GET", "php/hora.php", true);
				xhttp.send();
			    
				}

			    else {
				    // code for old IE browsers
			    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				
			    };
			    



    });