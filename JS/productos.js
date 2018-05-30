$(document).ready(function() {
	//DATATABLE DE EXISTENCIA PRODUCTOS
 var tablaProductos = $('#tablaProductos').DataTable( {
        "ajax": "../Aplicacion/buscarProductos.php",					
					  "columns": [
					      {
					        "data": "Acciones",
					        "defaultContent": "<button class='btn btn-primary btn-sm' data-toggle='modal' data-target='#modalEditarProducto' id='productoSelec'><img src='../Aplicacion/gear.png' style='width:20%;'></button><button class='btn btn-danger btn-sm' id='productoSelec'><img src='../Aplicacion/delete.png' style='width:20%;'></button>",
					        "targets": 0
					      },
					      { "data": "ID_Producto" },
					      { "data": "Nombre" },
						  { "data": "Descripcion" },
						  { "data": "Nombrecate" }
					      ],
         "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
	});
    $("#tablaProductos tbody").on('click', '#productoSelec', function() {
        var trElem = $(this).closest("tr");// grabs the button's parent tr element
        var firstTd = $(trElem).children("td")[1]; //takes the first td which would have your Id
        alert($(firstTd).text())

    });
});