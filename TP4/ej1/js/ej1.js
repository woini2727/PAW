var console = console || {},
  document = document || {},



		MemoTest={
			 tamaño: 4,
			iniciar:function nplayers(contenedor){
				
				"use strict";
				var div = document.getElementById(contenedor);
				this.armarGrilla(div);
				},

			armarGrilla:function(div){
				var egrilla = document.createElement("h3");
				tgrilla = document.createTextNode(this.tamaño);
				 egrilla.appendChild(tgrilla);
				 div.appendChild(egrilla);},

			armarMemo:function(div){ 
				if(this.tamaño==3){
					var img = document.createElement("img");
					div.appendChild(egrilla);
				}
				else if (this.tamaño==4) {
					
				}else if (this.tamaño==5) {

				}
				//div.addEventListener("click", function (event) {
          		//var event = event || e;
          		//event.target.setAttribute("class", "Ahorcado_tecla Ahorcado_teclaUsada");          document.getElementById("Ahorcado_palabraBuscada").innerHTML = Ahorcado.palabraBuscada();
        		//})
			},
		
};

 

