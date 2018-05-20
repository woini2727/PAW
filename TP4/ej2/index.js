var console = console || {},
  document = document || {},
Color={

    
    setcolor:function() {
          //console.log(t.value); 
            
          var html = document.getElementsByTagName('html')[0];
       var color =document.getElementById('myColor').value;
           html.style.setProperty("--main-cc", color); 


    },


    setRange: function(){
    	var html = document.getElementsByTagName('html')[0];
    	var range =document.getElementById('myRange').value;
    	html.style.setProperty("--main-ve", range+"s");
    }


}   ;   