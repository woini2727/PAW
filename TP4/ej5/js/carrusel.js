var console = console || {},
  document = document || {},


  	Carrusel={
  		imagenes:["img/naturaleza1.jpg","img/naturaleza2.jpg","img/naturaleza3.jpg"],
  		n:0,
  		iniciar:function(div){
  			var div = document.getElementById(div);
  			var img=document.createElement("img");
  			img.src=this.imagenes[0];
  			
  			img.setAttribute("id","imag");
  			img.setAttribute("width","600px");
  			img.setAttribute("height","300px");
  			
  			div.appendChild(img);
  		},
  		anttimg:function(){
  			
  		
  			var img = document.getElementById("imag");
  			if(this.n==0){
  				this.n=this.imagenes.length;
  				img.src=this.imagenes[this.n-1];
  			}else if (this.n==this.imagenes.length){
  				this.n=this.n-2;
  				img.src=this.imagenes[this.n];
  			}else{
  				this.n=this.n-1;
  				img.src=this.imagenes[this.n];
  			}
  			  			
  		},
  		nextimg:function(){
  			console.log(this.n);
  			var img = document.getElementById("imag");
  				this.n=this.n+1;
  				if (this.n==this.imagenes.length){
  				this.n=0;}
  				img.src=this.imagenes[this.n];
  				
  		

  		}
  	};
