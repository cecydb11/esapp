<?php
	include("conexion.php");
	$res= "";
	session_start();
	sleep(1);
	
	$usuario = $con->quote($_POST["usuario"]);
	$contra = $con->quote($_POST["contra"]);

	$select = ("SELECT * FROM usuarios WHERE Usuario = $usuario AND Contra = $contra AND Activo = 1");
	if($select){
		foreach($con->query($select) as $res);
		if($res == ""){
			echo "Error";
		}else{
			$_SESSION['Usuario'] = $res;
		}
	}else{
		echo "Error al consultar los datos";
	}
	$con=null;
?>