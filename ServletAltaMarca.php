<?php
	require 'conexionDB.php';
	
	$nombre_marca = $_REQUEST ["nombre_marca"];
	$Pais = $_REQUEST ["Pais"];
	$id_proveedor = $_REQUEST ["id_proveedor"];
	

	mysqli_query($conexion,"INSERT INTO Marcae (nombre_marca, Pais, id_proveedor) values 
		('$nombre_marca', '$Pais', '$id_proveedor')") or die( "user: ".mysqli_error($conexion));
?>
<a href="altaVkr.php"> regresar </a>