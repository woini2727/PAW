var console = console || {},
  document = document || {},



		MemoTest={
			 tamaño: 3,
			 imagenes: ['img/Argentina.png', 'img/Argentina2.png', "img/Bahrain.png","img/Bahrain2.png","img/Benin.png","img/Benin2.png","img/Brazil.png","img/Brazil2.png","img/blanco.png"],
			iniciar:function nplayers(contenedor){
				
				"use strict";
				var div = document.getElementById(contenedor);
				this.imagenes=this.ordenarImagenes(this.imagenes);
				this.armarGrilla(div);
				this.armarMemo(div);

				},

			armarGrilla:function(div){
				var egrilla = document.createElement("h3");
				tgrilla = document.createTextNode("tamaño del juego: "+ this.tamaño);
				 egrilla.appendChild(tgrilla);
				 div.appendChild(egrilla);},

			armarMemo:function(div){ 
				var tamañoActual=this.tamaño;
				var table = document.createElement("TABLE");
				//table.setAttribute("id", "myTable");
				var tbody=document.createElement("TBODY");
				//tbody.setAttribute("id", "tbody");
				
					for (var i = 0; i < tamañoActual; i++) {
							var tr=document.createElement("TR");
							//tr.setAttribute("id", "tr");
							
							for (var j = 0; j < tamañoActual; j++) {
								var td=document.createElement("TD");
								td.setAttribute("id",i+j)
								var img = document.createElement("img");
								//var imagSelec=this.imagenes.pop();
								
								
								img.src=imagSelec;
								//img.src="img/blanco.png";
								td.appendChild(img);
								//document.getElementById("tr").appendChild(td);

								tr.appendChild(td);
								
								/*img.addEventListener("click", function (event) {
						        var event = event || e;
						       	//retornarImg(td);
						        event.target.src=imagSelec;
						        })*/

							}
							table.appendChild(tr);													
						}
						div.appendChild(table);


			},
			ordenarImagenes:function(arreglo) {
						    var j, x, i;
						    for (i = arreglo.length - 1; i > 0; i--) {
						        j = Math.floor(Math.random() * (i + 1));
						        x = arreglo[i];
						        arreglo[i] = arreglo[j];
						        arreglo[j] = x;
						    }
						    return arreglo;
							},
		
};

 

