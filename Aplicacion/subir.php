<?php
	include("../conexion.php");
    function AutoCD(){
        include("../conexion.php");
    $Auto = $con->query("SHOW TABLE STATUS LIKE 'productos'");
    foreach ($Auto as $Autocontador);
    $Auto = ($Autocontador["Auto_increment"]);
    return $Auto;
    }
    $id = AutoCD();

   
      $errors= array();
      $file_name = $id;
      $file_size = $_FILES['fileImagen']['size'];
      $file_tmp = $_FILES['fileImagen']['tmp_name'];
      $file_type = $_FILES['fileImagen']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileImagen']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Extensión no permitida, porfavor seleccione una imagen JPEG o PNG.";
      }
      
      if($file_size > 2097152) {
         $errors[]='Maximo tamaño de archivo 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"Uploads/".$file_name.".".$file_ext);
         echo "Completado";
      }else{
         print_r($errors);
      }

    $prove = $con->query("SELECT * FROM proveedores WHERE Usuario_FK = '".$_POST["usuarioProducto"]."'");
    foreach($prove as $row);

    if ($prove) {
       echo "Paso 1";
    }else{
       echo "Error Paso 1";
    }

    $insertar =$con->query("INSERT INTO productos SET Nombre = '".$_POST["nombreProducto"]."', Descripcion = '".$_POST["descProducto"]."', Categoria_FK = '".$_POST["categoriaProducto"]."', Imagen = '".$file_name.".".$file_ext."'");

    if ($insertar) {
       echo "Paso 2";
    }else{
       echo "Error Paso 2";
    }

    $insertarCata =$con->query("INSERT INTO catalogo SET Proveedor_FK = '".$row["ID_Proveedor"]."', Producto_FK = '".$id."', Precio = '".$_POST["precioProducto"]."'");



    if ($insertar && $insertarCata) {
        echo '<script>
                alert("Los datos se insertaron correctamente");
                location.href = "indexProductos.php";
            </script>';
    }else{
        echo '<script>
                alert("Error");
            </script>';
    }



    


?>