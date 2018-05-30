<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="CSS/login.css">
		<link rel="stylesheet" href="CSS/empresa.css">
	</head>
	<body>
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="margin-top: 5%;">
						<form class="login" id="login">
							<div class="form-group text-center">
								<img src="Imagenes/logo.png" width="20%">
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
	                                <input class="form-control input-lg" type="password" id="contra" required placeholder="Contraseña"> 
	                        	</div>
                        	</div>
                        	<button type="submit" id="ingresar" class="btn btn-lg btn-block boton">Acceder</button>
                        	<br>
                        	<div class="alert alert-danger incorrecto" id="incorrecto">
							  <strong>¡Datos incorrectos!</strong> Intentalo de nuevo.
							</div>
							<br>  
						</form>
						<br>
						<label>¿No estas registrado?</label>
                        <button class="btn btn-default" data-toggle="modal" data-target="#ModalAgregarUsuario">Crear cuenta</button>
					</div>
				</div>
			</div>
			<div class="modal fade" id="ModalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<label>Tipo de usuario</label>
									<select class="form-control" id="tipo">
										<option value="0" selected disabled>Seleccione una opción</option>
										<option value="admin">Proveedor</option>
										<option value="normal">Cliente</option>
									</select>
							</div>
						</div>
					</div>
					<br>
			        <form id="formUsuarios">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8">
									<label>Usuario</label>
									<input type="text" class="form-control" id="user" required>
								</div>
								<div class="col-md-4">
									<label>Contraseña</label>
									<input type="password" class="form-control" id="pass" required>
								</div>
							</div>
							<br>
						</div>
						<div class="container-fluid">
							<div class="row">
									<div class="col-md-8">
										<label>Nombre</label>
										<input type="text" class="form-control" id="nombreEmpresa" required>
									</div>
									<div class="col-md-4">
										<label>Razón Social</label>
										<input type="text" class="form-control" id="razon" required>
									</div>
							</div>
							<br>
							<div class="row">
									<div class="col-md-2">
										<label>Telefono</label>
										<input type="tel" class="form-control" id="telefono" required>
									</div>
									<div class="col-md-2">
										<label>RFC</label>
										<input type="text" class="form-control" id="rfc" required>
									</div>
									<div class="col-md-4">
										<label>Ciudad</label>
										<input type="text" class="form-control" id="ciudad" required>
									</div>
									<div class="col-md-4">
										<label>Estado</label>
										<input type="text" class="form-control" id="estado" required>
									</div>
							</div>
							<br>
							<div class="row">
									<div class="col-md-4">
										<label>Pais</label>
										<input type="text" class="form-control" id="pais" required>
									</div>
									<div class="col-md-4">
										<label>Codigo Postal</label>
										<input type="number" class="form-control" id="cp" required>
									</div>
									<div class="col-md-4">
										<label>Domicilio</label>
										<input type="text" class="form-control" id="domicilio" required>
									</div>
							</div>
							<br>
							<div class="row">
									<div class="col-md-4">
										<label>Contacto</label>
										<input type="text" class="form-control" id="contacto" required>
									</div>
									<div class="col-md-4">
										<label>Correo electrónico</label>
										<input type="email" class="form-control" id="email" required>
									</div>
									<div class="col-md-4 categoriaProveedor">
										<label>Categorias</label>
										<select class="form-control" id="categorias">
										</select>
									</div>
							</div>
							<br>
							<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-block">AGREGAR</button>
									</div>
							</div>
						</div>
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div>
			  </div>
			</div>
		<script type="text/javascript" src="JS/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="JS/login.js"></script>
		<script type="text/javascript" src="JS/empresa.js"></script>
	</body>
</html>