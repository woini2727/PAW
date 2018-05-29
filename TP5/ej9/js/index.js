$(document).ready(function(){

		$('.formulario').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting
        var data = $(".formulario :input").serializeArray();
        //console.log(data); //use the console for debugging, F12 in Chrome, not alerts
        console.log(data);

			
		        $.ajax({

		                data:{
		                	
		                		nombre:$('#nombre').val(),
		                		titulo:$('select[name=titulo]').val(),
		                		email:$('input[name=email]').val(),
		                		minutos:$('select[name=minutos]').val(),
		                		edad:$('input[name=edad]').val(),
		                		talle:$('input[name=talle]').val(),
		                		altura:$('input[name=altura]').val(),
		                		fecha_nac:$('input[name=fecha_nac]').val(),
		                		pelo:$('input[name=pelo]').val(),
		                		horario:$('select[name=horario]').val(),

		                },
		                url:   'imprimir_turno.php',
		                type:  'post',


		        }).done(

		        	function(data){
		        		console.log(data);
		        		alert(data['nombre']);

		        	}
		        );

    		});
   
});









