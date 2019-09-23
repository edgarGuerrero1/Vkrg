

<?php
	require 'conexionDB.php';
	
	$id_vestido = $_REQUEST ["id_vestido"];
	$Costo_venta = $_REQUEST ["Costo_venta"];
	$id_Cliente = $_REQUEST ["id_Cliente"];
	$fecha_venta = $_REQUEST ["fecha_venta"];

	mysqli_query($conexion,"INSERT INTO costo_venta (Costo_venta, id_vestido, id_Cliente, fecha_venta) values 
		('$Costo_venta', '$id_vestido', '$id_Cliente', '$fecha_venta')") or die( "user: ".mysqli_error($conexion));
?>
<a href="altaVkr.php"> regresar </a>