<?php
include("conexion.php");

if($_POST["funcion"]=="llenarCategorias"){	
	$output = ("SELECT * FROM categoria_producto");
	foreach($con->query($output) as $salida) {
		echo "<a class='dropdown-item categorias' value='".$salida["ID_Categoria"]."'>".utf8_encode($salida["Nombre"])."</a>";
	}		
	
}

if($_POST["funcion"]=="verEmpresasCategoria"){	
	$output = ("SELECT * FROM proveedores WHERE Categoria_FK = ".$_POST["id"]);
	foreach($con->query($output) as $salida) {
		echo "<div class='empresas' idEmpresa = ".$salida["ID_Proveedor"]." >".utf8_encode($salida["Nombre"])."</div>";
	}		
	
}

if($_POST["funcion"]=="topDiez"){	
	$output = ("SELECT MAX(ID_Proveedor) AS ID FROM proveedores");
	foreach($con->query($output) as $salida);
	$max = $salida["ID"];

	for ($i=0; $i < 10; $i++) { 
		$id = rand(1, $max);
		$output = ("SELECT * FROM proveedores WHERE ID_Proveedor = ".$id);
		foreach($con->query($output) as $salida) {
			echo "<div class='topEmpresas' idEmpresa = ".$salida["ID_Proveedor"]." >".utf8_encode($salida["Nombre"])."</div>";
		}		
		
	}

	
	
}



?>