<<<<<<< HEAD

=======
>>>>>>> 8ba40b9f5670e72fdc0f7bdc7ed0a4736bd5b6a1
<!DOCTYPE html>
<html>
  <head>
    <title>Inicio</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" type="text/css">
=======
>>>>>>> 8ba40b9f5670e72fdc0f7bdc7ed0a4736bd5b6a1
  </head>
  <body>

    <?php include("menu.php"); ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-9" id="mostrarEmpresas">          
        </div>

         <div class="col-md-3" id="topDiez">          
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalDetalles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Detalles</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
          </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div id="datos_detalle"></div>
                </div>
             </div> 
          <div class="modal-footer">
            <button type="button" id="realizarPedido" idEmpresa = "" class="btn btn-primary">Realizar pedido</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>