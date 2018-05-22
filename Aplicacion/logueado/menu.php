
<?php
  include("../../conexion.php");
  session_start();

  if(isset($_SESSION['Usuario'])==false){
        header('Location: ../');
    }else{
      $usuario=$_SESSION['Usuario']['ID_Usuario'];
      $nombreUsuario = $_SESSION['Usuario']['Usuario'];
    }
    $con=null;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Inicio</title>
    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../CSS/aplicacion.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <img src="../../Imagenes/logo.png" width="5%"><br>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">

            <a class="nav-link" href="index.php"><b>Inicio</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notificaciones.php">Notificaciones</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorías
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="listaCategorias">
            </div>
          </li>
          <li class="nav-item">

            <a class="nav-link" href="salir.php">Cerrar Sesión</a>
          </li>
        </ul>
         <a href="perfil.php"> <button class="btn btn-success">Conectado como: <b><?php echo $nombreUsuario ?><b></button></a>

          </li>
        </ul>
        
      </div>
    </nav>
    <script type="text/javascript" src="../../JS/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../JS/menuInterno.js"></script>
    
  </body>
</html>