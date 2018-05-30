<?php
      $errors= array();
      $file_name = $_POST["nombreEmpresaimagen"];
      $file_size = $_FILES['fileImagen']['size'];
      $file_tmp = $_FILES['fileImagen']['tmp_name'];
      $file_type = $_FILES['fileImagen']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileImagen']['name'])));
      
      $expensions= array("jpg");
      
      if(in_array($file_ext,$expensions)=== false){
         echo "<script>
            alert('Extensión no permitida, seleccione una imagen jpg');
            location.href = 'perfil.php';
         </script>";
      }
      
      if($file_size > 2097152) {
         $errors[]='Maximo tamaño de archivo 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"Uploads/".$file_name.".".$file_ext);
         echo "<script>
            alert('Imagen subida correctamente');
            location.href = 'perfil.php';
         </script>";
      }else{
         print_r($errors);
      }



    


?>