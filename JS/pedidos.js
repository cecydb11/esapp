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
	$.ajax({
		type:"POST",
		url:"pedidos.php",
		data:({
			metodo : "selectCatalogo"
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
$(document).on("click", "#btnR",function(){
	$.ajax({
		type:"POST",
		url:"pedidos.php",
		data: ({
			metodo : "RegistrarPedido",
			FechaP : $("#FechaP").val(),
			FechaE : $("#FechaE").val(),
			ID_empresa : $("#ID_empresa").val(),
			Catalogo : $("#Catalogo option:selected").val(),
			Cliente : $("#Cliente option:selected").val()
		}),
			dataType: "html",
			success: function(msg)	{
				window.location.href="index.php";
				alert("Pedido Guardado");
				$("#datos").html(msg);
			}
	});
});
