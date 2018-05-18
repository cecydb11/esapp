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
        <input  type="date" id="FechaP" ></input >
        <label for="FechaE">Fecha Entrega</label>
        <input  type="date" id="FechaE" ></input >
        <label for="ID_empresa">Proveedor</label>
        <input type='text' id='ID_empresa' idEmpresa=" <?php echo $idEmpresa ?> " value='' disabled></input>
        <label for="pedido">Pedido</label>
        <input type="text" id="pedido_FK"></input>
        <label for="catalogo">Catalogo</label>
        <input type="text" id="catalogo"></input>
        <select id="cliente">
        </select>
        <div class="botones">
        	<button type="button" id="btnR">Registrar</button>
        	<button type="button" id="btnM">Modificar</button>
        	<button type="button" id="btnE">Eliminar</button>
        </div>
	</div>
        <script type="text/javascript" src="../../JS/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../JS/pedidos.js"></script>

</body>
</html>