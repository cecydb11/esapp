$(document).ready(function(e) {
	verEmp();
	selectCliente();
	selectCatalogo();
});

function selectCliente(){
	$.ajax({
		type:"POST",
		url:"pedidos.php",
		data:({
			metodo : "selectCliente"
		}),
		dataType:"html",
		success: function(msg){
			$("#Cliente").html(msg);
		}
	});
}
function selectCatalogo(){
	ID_empresa = $("#ID_empresa").attr('idEmpresa');
	$.ajax({
		type:"POST",
		url:"pedidos.php",
		data:({
			metodo : "selectCatalogo",
			ID_empresa : ID_empresa
		}),
		dataType:"html",
		success: function(msg){
			$("#Catalogo").html(msg);
		}
	});
}
function verEmp(){
	idEmpresa = $("#ID_empresa").attr('idEmpresa');
	$.ajax({
		type:"POST",
		url:"pedidos.php",
		data:({
			metodo : "verEmp",
			idEmpresa: idEmpresa
		}),
		dataType:"html",
		success: function(msg){
			$("#ID_empresa").val(msg);
		}
	});
}


$(document).on("click", "#btnG",function(){
	var cont = 0;
	var Catalogo;
	var Cantidad;
	var Detalles = new Array();
	$(".Detalles").each(function() {
	 	Catalogo = $(this).find(".Catalogo").attr('ID_Producto'); 
	 	Cantidad = $(this).find(".Cantidad").text();
		Detalles[cont]=Array(Catalogo,Cantidad);
		cont++;
	});
	$.ajax({
		type:"POST",
		url:"pedidos.php",
		data: ({
			metodo : "GuardarPedido",
			ID_empresa : $("#ID_empresa").attr('idEmpresa'),
			FechaP : $("#FechaP").val(),
			FechaE : $("#FechaE").val(),
			Cliente : $("#Cliente option:selected").val(),
			Detalles : Detalles
		}),
			dataType: "html",
			success: function(msg)	{
				location.reload ();
				alert(msg);
				//var e = prompt(" ",msg);
			}
	});
});

$(document).on("click", "#btnA",function(){
	if($('#Catalogo option:selected').val() == ""){
		alert("Debes elegir un producto.");
		$('#Catalogo').focus();
		return false;
	}
	var producto = $("#Catalogo option:selected").val();
	var Cantidad = $("#Cantidad").val();
	var concatenar = 1;
	$(".Detalles").each(function() {
		if(producto == $(this).find(".Catalogo").attr('ID_Producto')){
			var sumatoria = parseInt($(this).find(".Cantidad").text()) + parseInt(Cantidad);
			$(this).find(".Cantidad").text(sumatoria);
			concatenar = 0;
			//alert(producto);
			//alert($(this).find(".Catalogo").attr('ID_Producto'));
		}
	});
	if(concatenar==1){
		$("#Datos").append("<tr class='Detalles'><td class='Cantidad'>"+$("#Cantidad").val()+"</td><td class='Catalogo' ID_Producto="+$("#Catalogo option:selected").val()+">"+$("#Catalogo option:selected").text()+"</td><td class='Precio'>"+$("#Catalogo option:selected").attr('Precio')+"</td></tr>");
	}

});

