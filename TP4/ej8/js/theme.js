
$(document).ready(function(){
   $("#tema").on({
   		click: function(){
   			var color = $("body").css('background-color');
   			console.log(color);
   			if(color=="rgb(255, 238, 230)"){
   			$("body").css("background-color", "azure");}
   		else{
   			$("body").css("background-color", "rgb(255, 238, 230)");
   		}}
   		});
});