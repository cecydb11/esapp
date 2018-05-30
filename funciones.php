<?php 
include("conexion.php");
	if ($_POST["funcion"] == "SelectCategorias") {
		$buscar = $con->query("SELECT * FROM categoria_producto");
		echo "<option value='-1' selected disabled>Seleccione una opción</option>";
		foreach ($buscar as $fila) {
			echo "<option value='$fila[ID_Categoria]'>".utf8_encode($fila["Nombre"])."</option>";
		}
	}
	if ($_POST["funcion"] == "SelectCategorias1") {
		$buscar = $con->query("SELECT * FROM categoria_producto");
		echo "<option value='-1' selected disabled>Seleccione una opción</option>";
		foreach ($buscar as $fila) {
			if ($_POST["idcate"] == $fila["ID_Categoria"]) {
				echo "<option value='$fila[ID_Categoria]' selected>".utf8_encode($fila["Nombre"])."</option>";
			}else{
				echo "<option value='$fila[ID_Categoria]'>".utf8_encode($fila["Nombre"])."</option>";
			}
			
		}
	}
	if ($_POST["funcion"]=="InsertarUsuario") {
		$insertar = $con->query("INSERT INTO usuarios SET Usuario= '".$_POST["user"]."', Contra= '".$_POST["pass"]."',Tipo= '".$_POST["tipo"]."'");
		if ($insertar) {
			echo "¡Usuario registrado correctamente!";
			if ($_POST["tipo"] == "admin") {
				$insertar = $con->query("INSERT INTO proveedores SET Nombre= '".$_POST["nombre"]."', RazonSocial= '".$_POST["RazonSocial"]."',RFC= '".$_POST["rfc"]."', Telefono= '".$_POST["telefono"]."', Ciudad= '".$_POST["ciudad"]."',  Estado= '".$_POST["estado"]."', Pais= '".$_POST["pais"]."', CP= '".$_POST["cp"]."',Domicilio= '".$_POST["domicilio"]."', Contacto= '".$_POST["contacto"]."',  Correo= '".$_POST["correo"]."', Categoria_FK = '".$_POST["categoria"]."', Usuario_FK = '".$_POST["user"]."'");
			}else if ($_POST["tipo"] == "normal") {
				$insertar = $con->query("INSERT INTO clientes SET Nombre= '".$_POST["nombre"]."', RazonSocial= '".$_POST["RazonSocial"]."',RFC= '".$_POST["rfc"]."', Telefono= '".$_POST["telefono"]."', Ciudad= '".$_POST["ciudad"]."',  Estado= '".$_POST["estado"]."', Pais= '".$_POST["pais"]."', CP= '".$_POST["cp"]."',Domicilio= '".$_POST["domicilio"]."', Contacto= '".$_POST["contacto"]."',  Correo= '".$_POST["correo"]."', Usuario_FK = '".$_POST["user"]."'");
			}
			if ($insertar) {
				}else{
			echo "Error";
				}
		}else{
			echo "Error";
		}
	}
	if ($_POST["funcion"]=="ModificarUsuario") {
		$insertar = $con->query("UPDATE usuarios SET Usuario= '".$_POST["user"]."', Contra= '".$_POST["pass"]."',Tipo= '".$_POST["tipo"]."' WHERE ID_Usuario = '".$_POST["id"]."'");
		if ($insertar) {
			echo "Los datos han sido ingresados correctamente";
		}else{
			echo "Error";
		}
	}
	if ($_POST["funcion"] == "InsertarProducto") {


    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "Aplicacion/Uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
	$insertarProducto ="INSERT INTO productos SET Nombre = '".$_POST["producto"]."', Descripcion = '".$_POST["descrip"]."', Categoria_FK = '".$_POST["cate"]."'";

	if ($con->query($insertarProducto)) {
		$id=$con->lastInsertId();
		$prove = $con->query("SELECT * FROM proveedores WHERE Usuario_FK = '".$_POST["user"]."'");
    	foreach($prove as $row);
		$insertarCatalogo = $con->query("INSERT INTO catalogo SET Proveedor_FK = '".$row["ID_Proveedor"]."', Producto_FK = '".$id."', Precio = '".$_POST["precio"]."'");
		if ($prove) {
			echo "Producto ingresado correctamente";
		}else{
			echo "Error al agregar producto";
		}
	}
	if ($insertarProducto) {
		echo "Los datos se ingresaron correctamente";
	}else{
		echo "Error al insertar los datos";
	}
	}
	if ($_POST["funcion"]=="ModificarPerfil") {
			if ($_POST["tipo"] == "admin") {
				$insertar = $con->query("UPDATE proveedores SET Nombre= '".$_POST["nombre"]."', RazonSocial= '".$_POST["RazonSocial"]."',RFC= '".$_POST["rfc"]."', Telefono= '".$_POST["telefono"]."', Ciudad= '".$_POST["ciudad"]."',  Estado= '".$_POST["estado"]."', Pais= '".$_POST["pais"]."', CP= '".$_POST["cp"]."',Domicilio= '".$_POST["domicilio"]."', Contacto= '".$_POST["contacto"]."',  Correo= '".$_POST["correo"]."', Categoria_FK = '".$_POST["categoria"]."' WHERE Usuario_FK = '".$_POST["user"]."'");
			}else if ($_POST["tipo"] == "normal") {
				$insertar = $con->query("UPDATE clientes SET Nombre= '".$_POST["nombre"]."', RazonSocial= '".$_POST["RazonSocial"]."',RFC= '".$_POST["rfc"]."', Telefono= '".$_POST["telefono"]."', Ciudad= '".$_POST["ciudad"]."',  Estado= '".$_POST["estado"]."', Pais= '".$_POST["pais"]."', CP= '".$_POST["cp"]."',Domicilio= '".$_POST["domicilio"]."', Contacto= '".$_POST["contacto"]."',  Correo= '".$_POST["correo"]."' WHERE Usuario_FK = '".$_POST["user"]."'");
			}
			if ($insertar) {
			echo "Los datos se ingresaron correctamente";
				}else{
			echo "Error";
			}
	}
 ?>