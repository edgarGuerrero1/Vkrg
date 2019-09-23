<?php
	require 'conexionDB.php';
	
	$nombre_empresa = $_REQUEST ["nombre_empresa"];
	$Pais = $_REQUEST ["Pais"];
	$telefono = $_REQUEST ["telefono"];

	mysqli_query($conexion,"INSERT INTO proveedore (nombre_empresa, Pais, telefono) values 
		('$nombre_empresa', '$Pais', '$telefono')") or die( "user: ".mysqli_error($conexion));
?>
<a href="altaVkr.php"> regresar </a>