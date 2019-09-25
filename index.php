<!DOCTYPE html>
<html>
<head>
	<title>index php</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
	<div class="body">
		<div class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">nombreMarca</a>
			<a class="nav-link" href="AltaVkr.php">dar de alta</a><br>
			<a class="nav-link" href="ConsultaVestidos.php">informacion de vestidos</a><br>
			<a class="nav-link" href="ConsultaProveedores.php">informacion de proveedores</a><br>
			<a class="nav-link" href="ConsultaCompras.php">compras y ventas </a><br>	
			<a class="nav-link" href="index2.php"> index2</a>
			<!-- https://getbootstrap.com/docs/4.3/components/navbar/ -->

		</div>
		<div class="cont3">
			
			<?php // llamar el documento con la funcion
	  			require 'ServletImgIndex.php';
	  		?>
			
		</div>	
		<div>
			<div class="contacto">
				<p>contacto</p>
				<p>contacto</p>
					
			</div>
			<div class="contmaps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7464.810759713511!2d-103.37514537657594!3d20.693756896658797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af91c6719a67%3A0x15381fff8185db6f!2sMidtown%20Jalisco!5e0!3m2!1ses!2smx!4v1568850771060!5m2!1ses!2smx" width="680" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
		<div class="foot">
			
		</div>
		
	</div>	
</body>
</html>