<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar</title>
	<link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="../../CSS/empresa.css">
</head>
<body>   
<?php include("../menu.php"); ?>
<br>
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
			<div class="row">
				<div class="col-md-6">
					<label>Tipo de usuario</label>
					<select class="form-control" id="tipo">
						<option value="0" selected disabled>Seleccione una opción</option>
						<option value="admin">Proveedor</option>
						<option value="normal">Cliente</option>
					</select>
				</div>
				<div class="col-md-6">
					<label>Registrarse</label>
					<button class="btn-block btn btn-primary" type="submit">ACEPTAR</button>
				</div>
			</div>
		</div>
	</form>
	<form id="formProveedor">
		<div class="container-fluid">
			<div class="row" style="display: none;">
					<div class="col-md-4">
						<input type="text" id="tipodeuser" class="form-control">
					</div>
					<div class="col-md-4">
						<input type="text" id="nombreuser" class="form-control">
					</div>
			</div>
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
	<script type="text/javascript" src="../../JS/empresa.js"></script>
</body>
</html>