<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="CSS/login.css">
	</head>
	<body>
		<section class="main">
			<div class="container">
				<div class="row">
					<div class="col-md-4 offset-md-4" style="margin-top: 100px;">
						<form class="login" id="login">
							<div class="form-group text-center">
								<img src="Imagenes/login.png" width="50%">
							</div> 
							<div class="form-group">               
	                            <div class="input-group">
	                                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
	                                <input class="form-control input-lg" type="text" id="usuario" required placeholder="Usuario"/>
	                        	</div>
                        	</div>  
                        	<div class="form-group">               
	                            <div class="input-group">
	                                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
	                                <input class="form-control input-lg" type="password" id="contrasena" required placeholder="Contraseña"> 
	                        	</div>
                        	</div>
                        	<button type="submit" class="btn btn-lg btn-block boton">Acceder</button>  
						</form>
					</div>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="JS/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="JS/login.js"></script>
	</body>
</html>