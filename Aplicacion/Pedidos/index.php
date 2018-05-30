<?php 
    $idEmpresa = $_GET["idEmpresa"];
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="../../CSS/pedidos.css" />
</head>
<body>
	<div class="fondo">
                <label for="FechaP">Fecha Pedido</label>
                <input  type="date" id="FechaP" value="<?php echo date('Y-m-d'); ?>" disabled></input>
                <label for="FechaE">Fecha Entrega</label>
                <input  type="date" id="FechaE" min="<?php echo date('Y-m-d'); ?>" ></input>
                <label for="ID_empresa">Proveedor</label>
                <input type='text' id='ID_empresa' idEmpresa=" <?php echo $idEmpresa ?> " value='' disabled></input>
                <select id="Cliente">
                </select>
                <select id="Catalogo">
                </select>
                <label for="Cantidad">Cantidad</label>
                <input type="number" id="Cantidad"></input>
                <table class="TablaPedidos">
                        <tr>
                                <td>Cantidad</td>
                                <td>Producto</td>
                                <td>Precio</td>
                                <tbody id="Datos"></tbody>
                        </tr>
                </table>
                <div class="botones">
        	       <button type="button" id="btnA">Agregar</button>
        	       <button type="button" id="btnG">Guardar</button>
                </div>  
	</div>
        <script type="text/javascript" src="../../JS/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../JS/pedidos.js"></script>

</body>
</html>