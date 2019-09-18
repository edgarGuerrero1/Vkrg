<!DOCTYPE html>
<html>
<head>
	<title>Alta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>


	<div class="body">	
		<div>
			<form action="servlet.php" method="post">
				<label>Dar de alta Proveedor</label><br>
				<input type="text" name="nombre_empresa" placeholder="Nombre empresa" required></input><br>
				<input type="text" name="" placeholder="Marca" required></input><br>
				<input type="text" name="" placeholder="Pais" required></input><br>
				<input type="text" name="" placeholder="telefono" required></input><br>
				<input type="submit" name="enviar"></input>
			</form>	
			<br>
			<form action="servlet.php" method="post">
				<label>Dar de alta vestido</label><br>
				<input type="text" name="" placeholder="Descripcion" required></input><br>
				<input type="" name="" placeholder="Diseñador-compañia" required></input><br>
				<input type="" name="" placeholder="Imagen" required></input><br>
				<input type="submit" name="enviar"></input>
			</form>	
			<br>
			<form action="servlet.php" method="post">
				<label>Dar de costo Compra</label><br>
				<input type="date" name="" placeholder="Fecha_compra" required></input><br>
				<input type="number" name="" placeholder="cantidad" required></input><br>
				<input type="text" name="" placeholder="id vestido" required></input><br>
				<input type="text" name="" placeholder="id proveedor" required></input><br>
				<input type="submit" name="enviar"></input>
			</form>	

		</div>
		

	</div>
</body>
</html>