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
				 div.appendChild(egrilla);
			},
};

 

