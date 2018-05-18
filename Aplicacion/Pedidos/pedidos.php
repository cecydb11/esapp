<?php 
include ("../../conexion.php");
if($_POST["metodo"]=="selectCliente"){
	$seleccionar = ("SELECT * FROM clientes");
	echo "<option selected='true' disabled='disabled' value=''>Selecciona el cliente</option>";
	foreach($con->query($seleccionar) as $llenar){
		echo "<option value='".$llenar['ID_Clientes']."'>".utf8_encode($llenar['Nombre'])."</option>";
	}
}
if($_POST["metodo"]=="verEmp"){
	$seleccionar = ("SELECT Nombre FROM proveedores WHERE ID_Proveedor=".$_POST['idEmpresa']);
	foreach($con->query($seleccionar) as $llenar);
		echo $llenar['Nombre'];

}

 ?>