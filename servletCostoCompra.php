<?php
	require 'conexionDB.php';
	
	$costo_compra = $_REQUEST ["costo_compra"];
	$fecha_compra = $_REQUEST ["fecha_compra"];
	$cantidad_pieza = $_REQUEST ["cantidad_pieza"];
	$id_vestido = $_REQUEST ["id_vestido"];
	$id_proveedor = $_REQUEST ["id_proveedor"];


	mysqli_query($conexion,"INSERT INTO costo_compra (costo_compra, fecha_compra, cantidad_pieza, id_vestido, id_proveedor) values 
		('$costo_compra', '$fecha_compra', '$cantidad_pieza', '$id_vestido', '$id_proveedor')") or die( "user: ".mysqli_error($conexion));
?>
<a href="altaVkr.php"> regresar </a>