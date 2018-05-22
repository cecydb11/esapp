<?php
<<<<<<< HEAD
include("conexion.php");
=======
include("../../conexion.php");
>>>>>>> 8ba40b9f5670e72fdc0f7bdc7ed0a4736bd5b6a1

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

if($_POST["funcion"]=="verDetallesEmpresa"){	
	$output = ("SELECT proveedores.*, categoria_producto.Nombre as Categoria FROM proveedores LEFT JOIN categoria_producto ON ID_Categoria = Categoria_FK WHERE ID_Proveedor = ".$_POST["id"]);
	foreach($con->query($output) as $salida) {
		echo "<div class='detalleEmpresa'>
				<h4>".utf8_encode($salida["Nombre"])."</h4>
				<h5>Dirección: ".utf8_encode($salida["Domicilio"])."</h5>
				<h5>Contacto: ".utf8_encode($salida["Contacto"])."</h5>
				<h5>Teléfono: ".utf8_encode($salida["Telefono"])."</h5>
				<h5>Email: ".utf8_encode($salida["Correo"])."</h5>
				<h5>Categoria: ".utf8_encode($salida["Categoria"])."</h5>
			</div>";
	}	
}




?>