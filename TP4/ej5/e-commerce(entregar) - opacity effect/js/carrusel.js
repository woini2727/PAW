var console = console || {},
  document = document || {},


  	Carrusel={
  		imagenes:["img/marca xbo.jpg","img/marca r.jpg","img/marcas ea.jpg"],
  		n:0,
  		iniciar:function(div){
  			var div = document.getElementById(div);
  			var img=document.createElement("img");
        img.setAttribute("class","img");
  			img.src=this.imagenes[0];
  			
  			img.setAttribute("id","imag");
  		  img.setAttribute("width","800px");
  			img.setAttribute("height","300px");
    
  			
  			div.appendChild(img);
  		},
  		anttimg:function(){
  		//	var delayInMilliseconds = 5000 ;
  		  var img = document.getElementById("imag");
  			
        /*img.style.opacity="0";
        setTimeout(function() {
         img.style.opacity="1";},delayInMilliseconds);*/
         //img.style.transition="all 2s";

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
       this.move();

  			  			
  		},
  		nextimg:function(){
  			console.log(this.n);
  			var img = document.getElementById("imag");
  				this.n=this.n+1;
  				if (this.n==this.imagenes.length){
  				this.n=0;}
  				img.src=this.imagenes[this.n];
          this.move();
  		},
      move:function(){
        var elem = document.getElementById("imag");
        var pos = 0;
        var id = setInterval(frame, 10);
        function frame() {
          if (pos >= 1) {
            clearInterval(id);
          } else {
            pos=pos+0.010; 
            elem.style.opacity = pos; 
           // elem.style.hei = pos + 'px'; 
          }
        }
      },

  	};
