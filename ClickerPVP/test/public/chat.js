const socket = io()


$(document).ready(function(){


	let click =document.getElementById('click');
	click.addEventListener('click',function(){
		console.log("click log chat.js");
		socket.emit('clickemit',{
			click :"+1"
		})
	});

	socket.on('clickAtack',function(ataque){
		console.log(ataque.click);
		$('#clickAtack').append('<li>'+ataque.click+'</li>');
		$('.clickAtack').append('<li>'+ataque.click+'</li>');
	});
});