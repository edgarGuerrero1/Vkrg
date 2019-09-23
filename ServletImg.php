<?php
	require 'conexionDB.php';
	$marca_vestido = $_REQUEST ["marca_vestido"];
	$descripcion = $_REQUEST ["descripcion"];
	$foto = $_FILES["foto"]["name"];
	$ruta = $_FILES["foto"]["tmp_name"];
	$destino ="imgIndex/".$foto;
	move_uploaded_file($ruta, $destino);


	mysqli_query($conexion,"INSERT INTO vestidoe (descripcion, foto, marca_vestido) values ('$descripcion', '$foto', '$marca_vestido')") or die( "user: ".mysqli_error($conexion));
?>
<a href="altaVkr.php"> regresar </a>