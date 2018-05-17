var console = console || {},
  document = document || {},
Color={

    
    setcolor:function() {
          //console.log(t.value); 
            
          var html = document.getElementsByTagName('html')[0];
       var color =document.getElementById('myColor').value;
           html.style.setProperty("--main-cc", color); 


    },
}   ;   