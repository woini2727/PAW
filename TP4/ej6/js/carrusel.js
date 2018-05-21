var console = console || {},
  document = document || {},


  	Carrusel={
  		imagenes:["img/marca xbo.jpg","img/marca r.jpg","img/marcas ea.jpg"],
  		n:0,
      valueb:0,
  		iniciar:function(div){
  			var div = document.getElementById(div);
  			var img=document.createElement("img");
        var p=document.createElement("p"),
            tp=document.createTextNode("0%");
        var progress=document.createElement("progress");
        progress.setAttribute("id","barra");
        progress.setAttribute("max","99");
        
        p.setAttribute("class","bp");



  			img.src=this.imagenes[0];
        var unidad=this.calcularUnidadBarra();
        this.valueb=unidad;
  			progress.setAttribute("value",this.valueb);

  			img.setAttribute("id","imag");
  			img.setAttribute("width","800px");
  			img.setAttribute("height","300px");
  			
        p.appendChild(tp);

  			div.appendChild(img);
        div.appendChild(progress);
         div.appendChild(p);
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
  			
  			var img = document.getElementById("imag");
  				this.n=this.n+1;
  				if (this.n==this.imagenes.length){
  				this.n=0;}
  				img.src=this.imagenes[this.n];	
          this.incProgreso();
         
  		  
  		},
      incProgreso:function(){
          var unidad=this.calcularUnidadBarra();
         
          var progress =document.getElementById('barra');
           
          if (this.n==0){
              this.valueb=unidad;
          }else{
            this.valueb=this.valueb+unidad;
          }
          progress.setAttribute("value",this.valueb);


      },
      devProgreso:function(){

      },
      calcularUnidadBarra:function(){
        var total=this.imagenes.length;
        var u=1/total*100;
        var unidad=Math.trunc(u);
        return unidad;

      },

  	};
