<?php
	require 'conexionDB.php';
	
	$foto = $_FILES["fotoIndex"]["name"];
	$ruta = $_FILES["fotoIndex"]["tmp_name"];
	$destino ="imgIndexPrincipal/".$foto;
	move_uploaded_file($ruta, $destino);


	mysqli_query($conexion,"INSERT INTO ImgPrincipalE (foto_index) values ('$foto')") or die( "user: ".mysqli_error($conexion));
?>
<a href="altaVkr.php"> regresar </a>