$(document).ready(function(){

		$('.formulario').on('submit', function(e) { 
        e.preventDefault();  
        var data = $(".formulario :input").serializeArray();

		        $.ajax({

		                data:{
		                	
		                		nombre:$('#nombre').val(),
		                		titulo:$('select[name=titulo]').val(),
		                		email:$('input[name=email]').val(),
		                		telefono:$('input[name=telefono]').val(),
		                		minutos:$('select[name=minutos]').val(),
		                		edad:$('input[name=edad]').val(),
		                		talle:$('input[name=talle]').val(),
		                		altura:$('input[name=altura]').val(),
		                		fecha_nac:$('input[name=fecha_nac]').val(),
		                		pelo:$('input[name=colorpelo]').val(),
		                		horario:$('select[name=horario]').val(),

		                },
		                url:   'imprimir_turno.php',
		                type:  'post',
		               // dataType:"json",


		        }).done(

		        	function(data){
		        		var $turno=JSON.parse(data);
 
						$('#mostrarFormulario').empty();
						
						var table = $('<table border=1>'),
						    row;
						    $.each($turno, function (index,value){

						    row = $('<tr>');
						    row.append($('<td>', {html: index}))
						       .append($('<td>', {html: value}));
						    table.append(row);
						    });

						$('#mostrarFormulario').append(table);
		        	}
		        );

    		});
   
});









