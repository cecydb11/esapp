<?php 
include ("../../conexion.php");
<<<<<<< HEAD

=======
>>>>>>> ebd3feaaee05c89a46d2a237ad21ce61e86a13a7
if($_POST["metodo"]=="selectCliente"){
	$seleccionar = ("SELECT * FROM clientes");
	echo "<option selected='true' disabled='disabled' value=''>Selecciona el cliente</option>";
	foreach($con->query($seleccionar) as $llenar){
		echo "<option value='".$llenar['ID_Clientes']."'>".utf8_encode($llenar['Nombre'])."</option>";
	}
}
<<<<<<< HEAD

if($_POST["metodo"]=="selectCatalogo"){
	$seleccionar = ("SELECT catalogo_detalle.*, productos.* FROM catalogo_detalle LEFT JOIN productos ON Producto_FK = ID_Producto");
	echo "<option selected='true' disabled='disabled' value=''>Selecciona el Producto</option>";
	foreach($con->query($seleccionar) as $llenar){
		echo "<option value='".$llenar['ID_Catalogo_Detalle']."'>".utf8_encode($llenar['Nombre'])."</option>";
	}
}

=======
>>>>>>> ebd3feaaee05c89a46d2a237ad21ce61e86a13a7
if($_POST["metodo"]=="verEmp"){
	$seleccionar = ("SELECT Nombre FROM proveedores WHERE ID_Proveedor=".$_POST['idEmpresa']);
	foreach($con->query($seleccionar) as $llenar);
		echo $llenar['Nombre'];
<<<<<<< HEAD
=======

>>>>>>> ebd3feaaee05c89a46d2a237ad21ce61e86a13a7
}

 ?>