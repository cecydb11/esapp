<?php 
include("../conexion.php");

	$query = "SELECT ID_Producto, productos.Nombre as nomproduc, Descripcion, categoria_producto.Nombre as Nombrecate FROM productos INNER JOIN categoria_producto ON categoria_producto.ID_Categoria = productos.Categoria_FK";
	$registro = $con->query($query);

	//CREAMOS ARRAY
	$i=0;
	$tabla = "";
	
	foreach($registro as $row){
		$tabla.='{"ID_Producto":"'.utf8_encode($row['ID_Producto']).'","Nombre":"'.utf8_encode($row['nomproduc']).'","Descripcion":"'.utf8_encode($row['Descripcion']).'","Nombrecate":"'.utf8_encode($row['Nombrecate']).'"},';		
		$i++;
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	
	

 ?>