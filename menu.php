<!DOCTYPE html>
<html>
  <head>
    <title>Inicio</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="CSS/aplicacion.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <img src="Imagenes/logo.png" width="5%"><br>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="Aplicacion/login">Iniciar Sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Aplicacion/Empresa">Regístrate</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorías
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="listaCategorias">
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
    <script type="text/javascript" src="JS/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="JS/Aplicacion.js"></script>
    
  </body>
</html>