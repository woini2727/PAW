
$(document).ready(function(){
   $("#tema").on({
   		click: function(){
   			var color = $("body").css('background-color');
   			
   			if(color=="rgb(255, 238, 230)"){
   			$("body").css("background-color", "azure");}
   		else{
   			$("body").css("background-color", "rgb(255, 238, 230)");
   		}}
   		});

  //cambio la vista
   $("#vista").on({
   		click: function(){
   			var display = $(".fd2").css('display');
   			console.log(display);
   			if(display=="flex"){
   				$(".fd2").css("display","block");
   			}else{
   				$(".fd2").css("display","flex");
   			}
   		}
   })
});