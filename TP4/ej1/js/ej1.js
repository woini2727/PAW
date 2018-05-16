var console = console || {},
  document = document || {},



		MemoTest={
			 tamaño: 3,
			 imagenes: ['img/Argentina.png', 'img/Argentina2.png', "img/Bahrain.png","img/Bahrain2.png","img/Benin.png","Benin2.png"],
			iniciar:function nplayers(contenedor){
				
				"use strict";
				var div = document.getElementById(contenedor);
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
								var img = document.createElement("img");

								var random=Math.floor((Math.random() * this.imagenes.size) + 0);
								var imagSelec=this.imagenes[random];
								img.src=imagSelec;
								delete (this.imagenes[random]);
								
								
								td.appendChild(img);
								//document.getElementById("tr").appendChild(td);

								tr.appendChild(td);
								img.addEventListener("click", function (event) {
						        var event = event || e;
						        event.target.src="img/argentina.png";
						        })

							}
							table.appendChild(tr);													
						}
						div.appendChild(table);


			},
		
};

 

