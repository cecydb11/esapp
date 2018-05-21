$(document).ready(function(e) {
	verEmp();
	selectCliente();
<<<<<<< HEAD
	selectCatalogo();
});


=======
});

>>>>>>> ebd3feaaee05c89a46d2a237ad21ce61e86a13a7
function selectCliente(){
	$.ajax({
		type:"POST",
		url:"pedidos.php",
		data:({
			metodo : "selectCliente"
		}),
		dataType:"html",
		success: function(msg){
<<<<<<< HEAD
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
=======
			$("#cliente").html(msg);
>>>>>>> ebd3feaaee05c89a46d2a237ad21ce61e86a13a7
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
<<<<<<< HEAD
		}
	});
}
$(document).on("click", "#btnR",function(){
=======
			//alert(msg);
		}
	});
}
/*$(document).on("click", "#btnR",function(){
>>>>>>> ebd3feaaee05c89a46d2a237ad21ce61e86a13a7
	$.ajax({
		type:"POST",
		url:"pedidos.php",
		data: ({
			metodo : "RegistrarPedido",
			FechaP : $("#FechaP").val(),
			FechaE : $("#FechaE").val(),
<<<<<<< HEAD
			ID_empresa : $("#ID_empresa").val(),
			Catalogo : $("#Catalogo option:selected").val(),
			Cliente : $("#Cliente option:selected").val()
=======
			ID_empresa : $("#Unidad option:selected").val(),
			Existencia : $("#Existencia").val(),
			Existencia_m : $("#Existencia_m").val()
>>>>>>> ebd3feaaee05c89a46d2a237ad21ce61e86a13a7
		}),
			dataType: "html",
			success: function(msg)	{
				window.location.href="index.php";
				alert("Pedido Guardado");
				$("#datos").html(msg);
			}
	});
});
<<<<<<< HEAD
=======
*/
>>>>>>> ebd3feaaee05c89a46d2a237ad21ce61e86a13a7
