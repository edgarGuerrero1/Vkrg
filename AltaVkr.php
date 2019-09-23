<!DOCTYPE html>
<html>
<head>
	<title>Alta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	

</head>
<body>


	<div class="body">	
		<div>
			<a href="index.php">regresar</a>
			<form action="ServletAltaProveedore.php" method="post" class="wForm">
				<div class="form-group">
					<label>Dar de alta Proveedor</label><br>
					<input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre empresa" required></input><br>
					<input type="text" class="form-control" name="Pais" placeholder="Pais" required></input><br>
					<input type="text" class="form-control" name="telefono" placeholder="telefono" required></input><br>
					<input type="submit" class="btn btn-dark wForm" name="enviar"></input>
				</div>
			</form>	
			<br>
			<form action="ServletAltaMarca.php" method="post" class="wForm">
				<div class="form-group">
					<label>Dar de alta marca</label><br>
					<input type="text" class="form-control" name="nombre_marca" placeholder="Nombre empresa" required></input><br>
					<input type="text" class="form-control" name="Pais" placeholder="Pais" required></input><br>
					<input type="number" class="form-control" name="id_proveedor" placeholder="telefono" required></input><br>
					<input type="submit" class="btn btn-dark wForm" name="enviar"></input>
				</div>
			</form>
			<br>	
			<form action="ServletImg.php" method="post" class="wForm" enctype="multipart/form-data">
				<div class="form-group">
					<label>Dar de alta vestido</label><br>
					<input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" ></input><br>
					<input type="text" class="form-control" name="marca_vestido" id="marca_vestido" placeholder="Diseñador-compañia" ></input><br>
					<input type="file" class="form-control" name="foto" id="foto" required placeholder="ingresa la imagen"></input></br>
					<input type="submit" class="btn btn-dark wForm" name="enviar"></input>
				</div>
			</form>	
			<br>
			<form action="servletCostoCompra.php" method="post" class="wForm">
				<label>Dar de costo Compra</label><br>
				<input type="numer" class="form-control" name="costo_compra" id= placeholder="costo_compra" required></input><br>
				<input type="date" class="form-control" name="fecha_compra" placeholder="fecha_compra" required></input><br>
				<input type="text" class="form-control" name="cantidad_pieza" placeholder="cantidad_pieza" required></input><br>
				<input type="text" class="form-control" name="id_vestido" placeholder="id_vestido" required></input><br>
				<input type="text" class="form-control" name="id_proveedor" placeholder="id_proveedor" required></input><br>

				<input type="submit" class="btn btn-dark wForm" name="enviar"></input>
			</form>	
			<br>
			<form action="servletCostoVenta.php" method="post" class="wForm">
				<label>Realizar Venta</label><br>
				<input type="text" class="form-control" name="id_vestido" placeholder="id vestido" required></input><br>
				<input type="text" class="form-control" name="Costo_venta" placeholder="Costo venta" required></input><br>
				<input type="text" class="form-control" name="id_Cliente" placeholder="id Cliente"></input><br>
				<input type="date" class="form-control" name="fecha_venta" placeholder="fecha_venta" required></input><br>

				<input type="submit" class="btn btn-dark wForm" name="enviar"></input>
			</form>	

		</div>
		

	</div>
</body>
</html>