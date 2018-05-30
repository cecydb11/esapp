<?php 
include ("../../conexion.php");

<<<<<<< HEAD
function incremento(){
	include ("../../conexion.php");
	$incremento = $con->query("SHOW TABLE STATUS LIKE 'pedidos'");
	foreach ($incremento as $contador);
	$incremento = ($contador["Auto_increment"]);
	return $incremento;
}

=======
>>>>>>> e6f7c207f11bca6493315da8551092c97b370cdd
if($_POST["metodo"]=="selectCliente"){
	$seleccionar = ("SELECT * FROM clientes");
	echo "<option selected='true' disabled='disabled' value=''>Selecciona el cliente</option>";
	foreach($con->query($seleccionar) as $llenar){
		echo "<option value='".$llenar['ID_Clientes']."'>".utf8_encode($llenar['Nombre'])."</option>";
	}
}
<<<<<<< HEAD
=======

>>>>>>> e6f7c207f11bca6493315da8551092c97b370cdd

if($_POST["metodo"]=="selectCatalogo"){
	$seleccionar = ("SELECT catalogo.*, productos.* FROM catalogo LEFT JOIN productos ON Producto_FK = ID_Producto  WHERE Proveedor_FK =".$_POST['ID_empresa']);
	echo "<option selected='true' disabled='disabled' value=''>Selecciona el Producto</option>";
	foreach($con->query($seleccionar) as $llenar){
		echo "<option Precio=".$llenar['Precio']." value='".$llenar['ID_Catalogo']."' title ='".utf8_encode($llenar['Descripcion'])."'>".utf8_encode($llenar['Nombre'])."</option>";
	}
}

if($_POST["metodo"]=="verEmp"){
	$seleccionar = ("SELECT Nombre FROM proveedores WHERE ID_Proveedor=".$_POST['idEmpresa']);
	foreach($con->query($seleccionar) as $llenar){
		echo $llenar['Nombre'];
<<<<<<< HEAD
	}
=======

>>>>>>> e6f7c207f11bca6493315da8551092c97b370cdd
}

if($_POST["metodo"]=="GuardarPedido"){
	$Pedido_FK = incremento();
	$insertar = $con->query("INSERT INTO pedidos SET Fecha_Pedido = '".$_POST['FechaP']."', Fecha_Entrega = '".$_POST['FechaE']."', Proveedor_FK =".$_POST['ID_empresa'].", Cliente_FK = ".$_POST['Cliente']);
	foreach ($_POST['Detalles']  as $det => $val) {
		$insertar = $con->query("INSERT INTO pedidos_detalles SET Pedido_FK = ".$Pedido_FK.", Catalogo_FK =".$val[0].", Cantidad = ".$val[1]."");
	}
}
 ?>