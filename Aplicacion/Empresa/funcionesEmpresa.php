<?php 
include("../../conexion.php");
	if ($_POST["funcion"] == "SelectCategorias") {
		$buscar = $con->query("SELECT * FROM categoria_producto");
		echo "<option value='-1' selected disabled>Seleccione una opción</option>";
		foreach ($buscar as $fila) {
			echo "<option value='$fila[ID_Categoria]'>".utf8_encode($fila["Nombre"])."</option>";
		}
	}
	if ($_POST["funcion"]=="Insertar") {
		if ($_POST["tipo"] == "admin") {
			$insertar = $con->query("INSERT INTO proveedores SET Nombre= '".$_POST["nombre"]."', RazonSocial= '".$_POST["RazonSocial"]."',RFC= '".$_POST["rfc"]."', Telefono= '".$_POST["telefono"]."', Ciudad= '".$_POST["ciudad"]."',  Estado= '".$_POST["estado"]."', Pais= '".$_POST["pais"]."', CP= '".$_POST["cp"]."',Domicilio= '".$_POST["domicilio"]."', Contacto= '".$_POST["contacto"]."',  Correo= '".$_POST["correo"]."', Categoria_FK = '".$_POST["categoria"]."', Usuario_FK = '".$_POST["user"]."'");
		}else if ($_POST["tipo"] == "normal") {
			$insertar = $con->query("INSERT INTO clientes SET Nombre= '".$_POST["nombre"]."', RazonSocial= '".$_POST["RazonSocial"]."',RFC= '".$_POST["rfc"]."', Telefono= '".$_POST["telefono"]."', Ciudad= '".$_POST["ciudad"]."',  Estado= '".$_POST["estado"]."', Pais= '".$_POST["pais"]."', CP= '".$_POST["cp"]."',Domicilio= '".$_POST["domicilio"]."', Contacto= '".$_POST["contacto"]."',  Correo= '".$_POST["correo"]."', Usuario_FK = '".$_POST["user"]."'");
		}
		
		if ($insertar) {
			echo "Los datos han sido ingresados correctamente";
		}else{
			echo "Error";
		}
	}
	if ($_POST["funcion"]=="InsertarUsuario") {
		$insertar = $con->query("INSERT INTO usuarios SET Usuario= '".$_POST["user"]."', Contra= '".$_POST["pass"]."',Tipo= '".$_POST["tipo"]."'");
		if ($insertar) {
			echo "Los datos han sido ingresados correctamente";
		}else{
			echo "Error";
		}
	}

 ?>