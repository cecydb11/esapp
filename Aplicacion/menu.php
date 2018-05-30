
<?php
  include("../conexion.php");
  session_start();

  if(isset($_SESSION['Usuario'])==false){
        header('Location: ../');
    }else{
      if ($_SESSION['Usuario']['Tipo'] == "admin") {
        $usuario=$_SESSION['Usuario']['ID_Usuario'];
        $nombreUsuario = $_SESSION['Usuario']['Usuario'];
        $opcionmenu = '<li class="nav-item">
                        <a class="nav-link" href="indexProductos.php">Productos</a>
                      </li>';
      }else if($_SESSION['Usuario']['Tipo'] == "normal"){
        $usuario=$_SESSION['Usuario']['ID_Usuario'];
        $nombreUsuario = $_SESSION['Usuario']['Usuario'];
        $opcionmenu = '';
      }
      
    }
    $con=null;
    include("../conexion.php");
    $buscarImagen = $con->query("SELECT * FROM proveedores WHERE Usuario_FK = '".$nombreUsuario."'");
    foreach ($buscarImagen as $row);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Inicio</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../CSS/aplicacion.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <img src="../Imagenes/logo.png" width="5%"><br>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">

            <a class="nav-link" href="index.php"><b>Inicio</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notificaciones.php">Notificaciones</a>
          </li>
          <?php 
            echo $opcionmenu;
           ?>
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
         <a href="perfil.php"> <button id="botonPerfil" nombreImagen="<?php  echo $row["Nombre"] ?>" class="btn btn-success"><span><span id="imagenperfil"></span> Conectado como: <b><?php echo $nombreUsuario ?><b>  </button></span> </a>
         
        </ul>
        
      </div>
    </nav>
    <script type="text/javascript" src="../JS/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../JS/menuInterno.js"></script>
    <script type="text/javascript" src="../JS/Aplicacion.js"></script>
    <script type="text/javascript" src="../JS/productos.js"></script>
    <script src="../JS/dropzone.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          var folder = "Uploads/";
          var nombre = $("#botonPerfil").attr("nombreImagen");
         $('<img src="'+ folder +'/'+nombre+'.jpg">').on('load', function() {
            $(this).appendTo('#imagenperfil').css({
              width: '30px',
              height:'30px',
              borderRadius:'30px'
            });
          });
      });
    </script>

  </body>
</html>