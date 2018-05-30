<?php 
    $idEmpresa = $_GET["idEmpresa"];

    function getCoordinates($address){
 
	$address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
	 
	$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
	 
	$response = file_get_contents($url);
	 
	$json = json_decode($response,TRUE); //generate array object from the response from the web
	 
	return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);
	 
	}
	include("../conexion.php");
	$buscar= $con->query("SELECT proveedores.*, categoria_producto.Nombre as NombreCate FROM proveedores INNER JOIN categoria_producto ON proveedores.Categoria_FK = categoria_producto.ID_Categoria WHERE ID_Proveedor = '$idEmpresa'");
	foreach ($buscar as $fila);
	$calle = getCoordinates("$fila[Pais] $fila[Estado] $fila[Ciudad] $fila[Domicilio] $fila[CP]");
	$calles = explode(",", $calle);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ubicación</title>

    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../CSS/aplicacion.css">
	<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
  	<input type="text" id="coor1" value="<?php echo "$calles[0]" ?>" style="display: none;">
  	<input type="text" id="coor2" value="<?php echo "$calles[1]" ?>" style="display: none;">
    <?php include("menu.php"); ?>
    <div id="map"></div>
    <script>
      function initMap() {
      	var cor1 = $("#coor1").val();
      	var cor2 = $("#coor2").val();
        var uluru = {lat: parseFloat(cor1), lng: parseFloat(cor2)};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOt61f-BgCYr_Oe8VIjgxbBi-yC2n1WG8&callback=initMap">
    </script>
    <br>
    <?php 
    $imagenes = '';
    $buscarProve = $con->query("SELECT * FROM proveedores WHERE Usuario_FK = '".$nombreUsuario."'");
    foreach ($buscarProve as $row);
    $buscarProductos = $con->query("SELECT * FROM catalogo WHERE Proveedor_FK = '".$row["ID_Proveedor"]."'");
    $con = 1;
    foreach ($buscarProductos as $key) {
    	$produc = $con->query("SELECT * FROM productos WHERE ID_Producto = '".$key["Producto_FK"]."'");
    	foreach ($produc as $pro) {
    		if ($con == 1) {
    		$imagenes .= '
						<div class="carousel-item active">
					      <img class="d-block w-100" style="width:10%" src="Uploads/'.$key["Producto_FK"].'.jpg">
					      <div class="carousel-caption d-none d-md-block">
						    <h5>'.$pro["Nombre"].'</h5>
						    <p>'.$pro["Descripcion"].'</p>
						  </div>
					    </div>
					    ';
	    	}else{
	    		$imagenes .= '
							<div class="carousel-item">
						      <img class="d-block w-100" style="width:10%"  src="Uploads/'.$key["Producto_FK"].'.jpg">
						      <div class="carousel-caption d-none d-md-block">
							    <h5>'.$pro["Nombre"].'</h5>
							    <p>'.$pro["Descripcion"].'</p>
							  </div>
						    </div>
						    ';
	    	}
	    	$con --;
    	}
    } 
     ?>
  	<div class="container-fluid">
  		<div class="contenedor">
  			<div class="row">
	  			<div class="offset-5">
	  				<h2>Datos generales</h2>
	  			</div>
	  		</div>
	  		<br>
	  		<div class="row text-center" style="font-size: 20px;">
	  			<div class="col-md-4">
	  				Nombre: <span style="color: red;"><?php echo utf8_encode($fila["Nombre"]) ?></span>
	  			</div>
	  			<div class="col-md-4">
	  				Razón Social: <?php echo utf8_encode($fila["RazonSocial"]) ?>
	  			</div>
	  			<div class="col-md-4">
	  				RFC: <?php echo $fila["RFC"] ?>
	  			</div>
	  		</div>
	  		<br>
	  		<div class="row text-center" style="font-size: 20px;">
	  			<div class="col-md-4">
	  				Telefono: <span><?php echo utf8_encode($fila["Telefono"]) ?></span>
	  			</div>
	  			<div class="col-md-4">
	  				Ciudad: <?php echo utf8_encode($fila["Ciudad"]) ?>
	  			</div>
	  			<div class="col-md-4">
	  				Estado: <?php echo utf8_encode($fila["Estado"]) ?>
	  			</div>
	  		</div>
	  		<br>
	  		<div class="row text-center" style="font-size: 20px;">
	  			<div class="col-md-4">
	  				Pais: <span><?php echo utf8_encode($fila["Pais"]) ?></span>
	  			</div>
	  			<div class="col-md-4">
	  				Codigo Postal: <?php echo utf8_encode($fila["CP"]) ?>
	  			</div>
	  			<div class="col-md-4">
	  				Domicilio: <?php echo utf8_encode($fila["Domicilio"]) ?>
	  			</div>
	  		</div>
	  		<br>
	  		<div class="row text-center" style="font-size: 20px;">
	  			<div class="col-md-4">
	  				Contacto: <span><?php echo utf8_encode($fila["Contacto"]) ?></span>
	  			</div>
	  			<div class="col-md-4">
	  				Correo electrónico: <?php echo utf8_encode($fila["Correo"]) ?>
	  			</div>
	  			<div class="col-md-4">
	  				Categoría: <?php echo utf8_encode($fila["NombreCate"]) ?>
	  			</div>
	  		</div>
  		</div>
  			  		<br>
	  		<div class="row text-center">
	  			<div class="col-md-12">
	  				<h2>Productos</h2>
	  			</div>
	  		</div>
	  		<br>
			<div class="row text-center">
				<div class="offset-3 col-md-6">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					   <?php 
					   		echo $imagenes;
					    ?>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
			<br>
  	</div>
  </body>
</html>