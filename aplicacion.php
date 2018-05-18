<?php
include("conexion.php");

if($_POST["funcion"]=="llenarCategorias"){	
	$output = ("SELECT * FROM categoria_producto");
	foreach($con->query($output) as $salida) {
		echo "<a class='dropdown-item categorias' value='".$salida["ID_Categoria"]."'>".utf8_encode($salida["Nombre"])."</a>";
	}		
	
}

if($_POST["funcion"]=="verEmpresasCategoria"){	
	$output = ("SELECT * FROM proveedores WHERE Categoria_FK = ".$_POST["id"]." ");
	foreach($con->query($output) as $salida) {
		echo "<div class='dropdown-item categorias' value='".$salida["ID_Categoria"]."'>".utf8_encode($salida["Nombre"])."</div>";
	}		
	
}

?>