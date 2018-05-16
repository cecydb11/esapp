$(document).ready(function() {
	llenarCategorias();	
});


function llenarCategorias() {
	var data= "bus="+$("#buscador").val();	
	$.ajax({
		url: 'Aplicacion.php',
		type: 'POST',
		data: data
	})
	.done(function(res) {
		$("#Books").html(res);
	})
	.fail(function() {
		alert(res);
	})
}