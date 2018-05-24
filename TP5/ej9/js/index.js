$(function() { //shorthand document.ready function
    $('.formulario').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting
        var data = $(".formulario :input").serializeArray();
        console.log(data); //use the console for debugging, F12 in Chrome, not alerts

    });
});
$.post( "imprimir_turno.php", function( data ) {
  $( "#mostrarFormulario" ).html( data );
});
//$.post("",)
$("#mostrarFormulario").load("imprimir_turno.php");