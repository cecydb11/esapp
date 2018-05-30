
<!DOCTYPE html>
<html>
  <head>
    <title>Productos</title>

    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../CSS/aplicacion.css">
  </head>
  <body>
    <?php include("menu.php"); 
    	  $usuario=$_SESSION['Usuario']['Usuario'];
    ?>
    <br>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    			<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#AgregarProducto">Agregar Producto</button>
    		</div>
    	</div>
    </div>


<div class="modal fade" id="AgregarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      	<div class="modal-body">
			     		<div class="container-fluid">
			     			<form enctype="multipart/form-data" action="subir.php" method="POST">
			     				<div class="row" style="display: none;">
										<input type="text" id="usuarioProducto" name="usuarioProducto" value="<?php echo $usuario ?>">
					     			</div>
								<div class="row">

				     				<div class="col-md-12">
				     					<label>Nombre del Producto</label>
				     					<input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Ejemplo: Jamon Fud" title="Producto, Marca" required>
				     				</div>
				     			</div>
				     			<br>
				     			<div class="row">
				     				<div class="col-md-12">
				     					<label>Descripción del Producto</label>
				     					<input type="text" class="form-control" id="descProducto" name="descProducto" placeholder="Ejemplo: Virgina Pavo y Cerdo 500g." required>
				     				</div>
				     			</div>
				     			<br>
				     			<div class="row">
				     				<div class="col-md-12">
				     					<label>Imagen del Producto</label>
				     					<input type="file" class="form-control imagenproducto file" id="file" name="fileImagen" required>
				     				</div>
				     			</div>
				     			<br>
				     			<div class="row">
				     				 	<div class="col-md-6">
											<label>Categorias</label>
											<select class="form-control" id="categoriaProducto" name="categoriaProducto">
					                          <option disabled selected value="-1">Seleccione una Categoría</option>
					                           <?php
					                           	  include("../conexion.php");
					                              $query = $con->query("SELECT * FROM categoria_producto");
					                             foreach ($query as $row){
					                                ?>
					                                 <option value="<?= $row['ID_Categoria']?>"><?= utf8_encode($row['Nombre'])?></option>
						                            <?php  

						                          }  
						                          ?>

					                        </select>
										</div>
										<div class="col-md-6">
					     					<label>Precio del Producto</label>
					     					<input type="number" id="precioProducto" class="form-control" name="precioProducto" required>
				     					</div>
				     			</div>
				     			<br>
				     			<button type="submit" class="btn btn-primary btn-block guardarProducto">Guardar Producto</button>
			     			</form>
			     			
							
			     		</div>
					</div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			      </div>
			</div>
		</div>
</div>
 	<div class="container-fluid">
 		<br>
    	<div class="row">
    			<table id="tablaProductos" class="table text-center" style="width:100%;">
		            <thead>
		                <tr>
		                    <td>Acciones</td>
		                    <td>ID del Producto</td>
		                    <td>Nombre</td>
		                    <td>Descripción</td>
		                    <td>Categoria</td>
		                </tr>
		            </thead>
		            <tbody></tbody>
		        </table>
    	</div>
 	</div>
  </body>
</html>