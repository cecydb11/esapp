<<<<<<< HEAD
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
=======
>>>>>>> 8ba40b9f5670e72fdc0f7bdc7ed0a4736bd5b6a1
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
<<<<<<< HEAD
            <a class="nav-link" href="index.php"><b>Inicio</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notificaciones.php">Notificaciones</a>
=======
            <a class="nav-link" href="#">Perfil</a>
>>>>>>> 8ba40b9f5670e72fdc0f7bdc7ed0a4736bd5b6a1
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorías
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="listaCategorias">
            </div>
          </li>
          <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link" href="salir.php">Cerrar Sesión</a>
          </li>
        </ul>
         <a href="perfil.php"> <button class="btn btn-success">Conectado como: <b><?php echo $nombreUsuario ?><b></button></a>
=======
            <a class="nav-link" href="#">Cerrar Sesión</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
>>>>>>> 8ba40b9f5670e72fdc0f7bdc7ed0a4736bd5b6a1
      </div>
    </nav>
    <script type="text/javascript" src="../../JS/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../JS/menuInterno.js"></script>
    
  </body>
</html>