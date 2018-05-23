var console = console || {},
  document = document || {},



		MemoTest={
			 tamañol: 3,
			 tamañoa: 4,
			 imagenes:[],
			 imagenes3x4: ['img/Argentina.png', 'img/Argentina.png', "img/Bahrain.png","img/Bahrain.png","img/Benin.png",
			 "img/Benin.png","img/Brazil.png","img/Brazil.png","img/Australia.png","img/Australia.png",
			 "img/albania.png","img/albania.png"],
			 imagenes4x5: ['img/Argentina.png', 'img/Argentina.png', "img/Bahrain.png","img/Bahrain.png","img/Benin.png",
			 "img/Benin.png","img/Brazil.png","img/Brazil.png","img/Australia.png","img/Australia.png",
			 "img/albania.png","img/albania.png","img/Barbados.png","img/Barbados.png","img/Belgium.png",
			 "img/Belgium.png","img/Belize.png","img/Belize.png","img/Burundi.png","img/Burundi.png"],
			 imagenes5x6: ['img/Argentina.png', 'img/Argentina.png', "img/Bahrain.png","img/Bahrain.png","img/Benin.png",
			 "img/Benin.png","img/Brazil.png","img/Brazil.png","img/Australia.png","img/Australia.png",
			 "img/albania.png","img/albania.png","img/Barbados.png","img/Barbados.png","img/Belgium.png",
			 "img/Belgium.png","img/Belize.png","img/Belize.png","img/Burundi.png","img/Burundi.png",
			 "img/Cambodia.png","img/Cambodia.png","img/Cape-Verde.png","img/Cape-Verde.png",
			 "img/Central-African-Republic.png","img/Central-African-Republic.png","img/Cuba.png","img/Cuba.png", 
			 "img/Grecee.png","img/Grecee.png"],
			
			iniciar:function (contenedor){
				
				"use strict";
				var div = document.getElementById(contenedor);
				
				
				this.armarGrilla(div,this.tamañol,this.tamañoa);
				this.armarMemo(div);
				},

			armarGrilla:function(div,tamañol,tamañoa){
				if (tamañol==3){
					this.imagenes=this.imagenes3x4;
				}
			 	else if(tamañol==4){
					this.imagenes=this.imagenes4x5;
				}else {
					this.imagenes=this.imagenes5x6;
				}
				this.imagenes=this.ordernarImagenes(this.imagenes);
				var egrilla = document.createElement("h3");
				tgrilla = document.createTextNode("tamaño del juego: "+ tamañol+"x"+tamañoa);
				 egrilla.appendChild(tgrilla);
				 div.appendChild(egrilla);
				 this.tamañol=tamañol;
				 this.tamañoa=tamañoa;
					},

			armarMemo:function(div){ 
				var tamañoL=this.tamañol;
				var tamañoA=this.tamañoa;
				var table = document.createElement("TABLE");
				table.setAttribute("id", "table");
				var tbody=document.createElement("TBODY");
				//tbody.setAttribute("id", "tbody");
				var n=0;
				var b=false;
					for (var i = 0; i < tamañoL; i++) {

							var tr=document.createElement("TR");
							//tr.setAttribute("id", "tr");
							
							for (var j = 0; j < tamañoA; j++) {
								var td=document.createElement("TD");
								var img = document.createElement("img");
								
								img.setAttribute("id",n)
								img.setAttribute('name',"down");
								n++;
								img.src="img/blanco.png";
								td.appendChild(img);
								//document.getElementById("tr").appendChild(td);

								tr.appendChild(td);
								//////////////////////////////////////////////
								img.addEventListener("click", function (event) {
							          var event = event || e;
							          var delayInMilliseconds = 1000	;

							       //antes de dar vuelta me fijo si hay mas de 2 levantadas
							    if ((this.getAttribute("name"))!="permanent"){ 
							   		//console.log(event.target.getAttribute("name"));
							          cantFlip=MemoTest.verFlip();
							          
							          if (cantFlip<2) {
							          	  //doy vuelta la carta
								          event.target.src=MemoTest.imagenes[parseInt(event.target.id)];
								          event.target.setAttribute("name","flip");
							          }
							          
								     cantFlip=MemoTest.verFlip();
							          if(cantFlip==2){
								          b=MemoTest.similitudFlip( event.target);
								          

								          if(b==true){
								          	event.target.setAttribute("name","permanent");
								          	MemoTest.setPermanent(event.target);
								          	//console.log(b);
								          	//console.log(event.target.name);
								          }
								          else if(b==false){
								          	//todas las no permanent en blanco
								          	setTimeout(function() {
												  MemoTest.todasBlanco();
											},delayInMilliseconds);
								          	
								          	//event.target.src="img/blanco.png";
								          }
							      }}
							     	 var ganar=MemoTest.verGanar();     
							   
								    //aca se revisa si se gano
								    if (ganar==true){			    
								    	//creo un boton para pasar a la sig dificultad
								    	MemoTest.crearLinkSigDif();

							    }
							       
						        })

							}
							table.appendChild(tr);													
						}
						div.appendChild(table);


			},
			ordernarImagenes:function(a) {
				    var j, x, i;
				    for (i = a.length - 1; i > 0; i--) {
				        j = Math.floor(Math.random() * (i + 1));
				        x = a[i];
				        a[i] = a[j];
				        a[j] = x;
				    }
				    return a;
				},
			verFlip:function(){
				var cantFlip=0;
				for (var i = 0; i < this.imagenes.length; i++) {
					img=document.getElementById(i);
					if (img.name=="flip") {
						cantFlip++;
					}
				}	
				return cantFlip;
			},
			similitudFlip:function(img){
				var n=false;
				//console.log(img.id);
				for (var i = 0; i < this.imagenes.length; i++) {
					img2=document.getElementById(i);

					if ((img2.id!=img.id)&&(img2.src==img.src)&&(img.name=="flip")&&(img2.name=="flip")) {
						n=true;

					}
				}	
				return n;
			},
			todasBlanco:function(){
				for (var i = 0; i < this.imagenes.length; i++) {
					img2=document.getElementById(i);
					if (img2.name!="permanent") {
						
						img2.src="img/blanco.png";
						img2.name="down";
					}
					
				}	
			},
			setPermanent:function(img){
				var img2;
				for (var i = 0; i < this.imagenes.length; i++) {
					img2=document.getElementById(i);
					if (img2.src==img.src) {
						img2.setAttribute("name","permanent");
					}
				}
			},
			verGanar:function(){
				var terminar=true;
				var img2;
				for (var i = 0; i < this.imagenes.length; i++) {
					img2=document.getElementById(i);
					if (img2.getAttribute("name")!="permanent") {
						terminar=false;
					}
				}
				return terminar;
			},
			crearLinkSigDif:function(){
				var div=document.getElementById('memo'),
					link=document.createElement("a"),
				 btn = document.createElement("BUTTON"),        
				 t = document.createTextNode("Siguiente Dificultad");       
				 btn.appendChild(t);
				div.appendChild(btn);
				btn.addEventListener("click", function (event) {
					MemoTest.armarNuevaGrilla();})
				
			},
			armarNuevaGrilla:function(){
				var memo=document.getElementById("memo");
				document.getElementById("main").removeChild(memo);
				var memo=document.createElement("div");
				memo.setAttribute("id","memo");
				var main=document.getElementById("main").appendChild(memo);
				MemoTest.imagenes=MemoTest.ordernarImagenes(MemoTest.imagenes);
				//cambio la dificultad
				if(this.tamañol==3){
					this.tamañol++;
					this.tamañoa++;
					var l=4,
				 	a=5;
				 	
					MemoTest.armarGrilla(memo,l,a);
					MemoTest.armarMemo(memo);
				}
				else if(this.tamañol==4){
					this.tamañol++;
					this.tamañoa++;
					var l=5,
				 	a=6;
				 	
					MemoTest.armarGrilla(memo,l,a);
					MemoTest.armarMemo(memo);
				}else {
					var l=3,
				 	a=3;
				 	MemoTest.armarGrilla(memo,l,a);
					MemoTest.armarMemo(memo);
				}	
			},

			
		
};



