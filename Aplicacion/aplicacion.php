<?php
if($_POST["funcion"]=="CargaProveedores"){
	if(isset($_POST["id"])){
		$output = ("SELECT (SELECT orden_compra.Proveedor_FK FROM orden_compra WHERE ID_O_Compra = ".$_POST["id"].") AS proveedor, proveedores.* FROM proveedores ORDER BY ID_proveedor");
		echo "<option selected disabled value =''>Selecciona un proveedor</option>";
		foreach($con->query($output) as $salida) {
			if($salida['proveedor'] == $salida['ID_proveedor']){
				echo "<option selected value ='".$salida['ID_proveedor']."'>".utf8_encode($salida['Nombre'])."</option>";
			}else{
				echo "<option value ='".$salida['ID_proveedor']."'>".utf8_encode($salida['Nombre'])."</option>";
			}
		}	
		
	}else{
		$output = ("SELECT * FROM proveedores");
		echo "<option selected disabled value =''>Selecciona un proveedor</option>";
		foreach($con->query($output) as $salida) {			
			echo "<option value ='".$salida['ID_proveedor']."'>".utf8_encode($salida['Nombre'])."</option>";
			
		}	
	}
}
?>