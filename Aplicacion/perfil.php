
<!DOCTYPE html>
<html>
  <head>
    <title>Perfil</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" type="text/css">
  </head>
  <body>

    <?php include("menu.php"); ?>
  <br>
  <br>
  <?php  
  include("../conexion.php");
  $buscar = "SELECT * FROM usuarios WHERE ID_Usuario = '$usuario'";
  foreach ($con->query($buscar) as $fila);
  if ($_SESSION['Usuario']['Tipo'] == "admin") {
    $buscarPerfil = "SELECT * FROM proveedores WHERE Usuario_FK = '$nombreUsuario'";
    $categoria = ' <div class="col-md-4 categoriaProveedor">
                    <label>Categorias</label>
                    <select class="form-control" id="categorias">
                    </select>
                  </div>';
  }else if($_SESSION['Usuario']['Tipo'] == "normal"){
    $buscarPerfil = "SELECT * FROM clientes WHERE Usuario_FK = '$nombreUsuario'";
    $categoria='';
  }
  foreach ($con->query($buscarPerfil) as $filaPerfil);


   ?>
   <div class="container-fluid">
     <div class="row">
        <div class="col-md-12 text-center">
          <h1>Datos de Usuario</h1> 
        </div>
     </div>
   </div>
  <br>
  <div class="container-fluid">
    <div class="contenedorusuario">
        <div class="row" style="display: none;">
            <input type="text" id="idid" value="<?php echo $usuario ?>">
        </div>
        <div class="row">
          <div class="col-md-8">
            <label>Usuario</label>
            <input type="text" class="form-control" id="user" required value="<?php echo $fila["Usuario"] ?>">
          </div>
          <div class="col-md-4">
            <label>Contraseña</label>
            <input type="text" class="form-control" id="pass" required value="<?php echo $fila["Contra"] ?>">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <label>Tipo de usuario</label>
            <select class="form-control" id="tipo">
              <option value="0"  disabled>Seleccione una opción</option>
              <?php 
                  if ($fila["Tipo"] == "admin") {
                    echo "<option value='admin' selected>Proveedor</option>";
                    echo "<option value='normal'>Cliente</option>";
                  }else{
                     echo "<option value='admin'>Proveedor</option>";
                    echo "<option value='normal' selected>Cliente</option>";
                     
                  }
               ?>
            </select>
          </div>
          <div class="col-md-6">
            <label>Modificar</label>
            <button class="btn-block btn btn-primary" id="modifcarUsu">ACEPTAR</button>
          </div>
        </div>
    </div>
  </div>
  <br>
   <div class="container-fluid">
     <div class="row">
        <div class="col-md-12 text-center">
          <h1>Datos de Perfil</h1> 
        </div>
     </div>
   </div>
  <br>
  <div class="container-fluid">
    <div class="contenedorperfil">
        <div class="row" style="display: none;">
            <input type="text" id="usu" value="<?php echo $nombreUsuario ?>">
        </div>
        <div class="row" style="display: none;">
            <input type="text" id="tipo" value="<?php echo $_SESSION['Usuario']['Tipo'] ?>">
        </div>
        <div class="row">
                  <div class="col-md-8">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombreEmpresaE" value="<?php echo $filaPerfil["Nombre"] ?>">
                  </div>
                  <div class="col-md-4">
                    <label>Razón Social</label>
                    <input type="text" class="form-control" id="razonE" value="<?php echo $filaPerfil["RazonSocial"] ?>">
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-md-2">
                    <label>Telefono</label>
                    <input type="tel" class="form-control" id="telefonoE" value="<?php echo $filaPerfil["Telefono"] ?>">
                  </div>
                  <div class="col-md-2">
                    <label>RFC</label>
                    <input type="text" class="form-control" id="rfcE" value="<?php echo $filaPerfil["RFC"] ?>">
                  </div>
                  <div class="col-md-4">
                    <label>Ciudad</label>
                    <input type="text" class="form-control" id="ciudadE" value="<?php echo $filaPerfil["Ciudad"] ?>">
                  </div>
                  <div class="col-md-4">
                    <label>Estado</label>
                    <input type="text" class="form-control" id="estadoE" value="<?php echo $filaPerfil["Estado"] ?>">
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-md-4">
                    <label>Pais</label>
                    <input type="text" class="form-control" id="paisE" value="<?php echo $filaPerfil["Pais"] ?>">
                  </div>
                  <div class="col-md-4">
                    <label>Codigo Postal</label>
                    <input type="number" class="form-control" id="cpE" value="<?php echo $filaPerfil["CP"] ?>">
                  </div>
                  <div class="col-md-4">
                    <label>Domicilio</label>
                    <input type="text" class="form-control" id="domicilioE" value="<?php echo $filaPerfil["Domicilio"] ?>">
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-md-4">
                    <label>Contacto</label>
                    <input type="text" class="form-control" id="contactoE" value="<?php echo $filaPerfil["Contacto"] ?>">
                  </div>
                  <div class="col-md-4">
                    <label>Correo electrónico</label>
                    <input type="email" class="form-control" id="emailE" value="<?php echo $filaPerfil["Correo"] ?>">
                  </div>
                  <div style="display: none;">
                    <input type="text" id="idcategoria" value="<?php echo $filaPerfil["Categoria_FK"] ?>">
                  </div>
                  <?php 
                    echo $categoria;
                   ?>
              </div>
              <br>
              <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-block"  id="modificarPerfil">MODIFICAR</button>
                  </div>
              </div>
      </div>
  </div>   
  <br>
   <div class="container-fluid">
     <div class="row">
        <div class="col-md-12 text-center">
          <h1>Imagen de Perfil</h1> 
        </div>
     </div>
   </div>
  <br>
  <div class="container-fluid">
      <div class="contenedorImagen">
         <div class="row">
            <div class="col-md-12">
               <form action="subirImagenPerfil.php" enctype="multipart/form-data" method="POST">
                  <input type="text" class="form-control" name="nombreEmpresaimagen" id="nombreEmpresaimagen" value="<?php echo $filaPerfil["Nombre"] ?>" style="display: none;">
                  <input type="file" class="form-control" name="fileImagen" id="fileImagen" required>
                  <br>
                  <button type="submit" class="btn btn-primary btn-block">GUARDAR</button>
               </form>
            </div>
         </div>
      </div>
  </div>
  <br>
    <script src="../JS/perfil.js"></script>
  </body>
</html>