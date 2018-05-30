
<!DOCTYPE html>
<html>
  <head>
    <title>Inicio</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" type="text/css">
  </head>
  <body>

    <?php include("menu.php"); ?>
  <br>
  <br>
  <?php  
  include("../../conexion.php");
  $buscar = "SELECT * FROM usuarios WHERE ID_Usuario = '$usuario'";
  foreach ($con->query($buscar) as $fila);

   ?>
  <div class="container-fluid">
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
    <script src="../../JS/perfil.js"></script>
  </body>
</html>