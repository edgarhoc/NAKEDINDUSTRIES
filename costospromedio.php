<?php $conexion=mysqli_connect('localhost','root','','polizona_mercado');?>
<!DOCTYPE html>
<html>
<head>
	<title>Costo Promedio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
	<body>
		<br>
		<div style="text-align:center;">
			<table class="tablas" style="margin: 0 auto;">
				<tr>
					<td>Boleta</td>
					<td>ID Embarque</td>
					<td>ID Insumo</td>
					<td>Unidades</td>
					<td>Costo Unitario</td>	
				</tr>

				<?php 
				$sql="SELECT * from costospromedio";
				$result=mysqli_query($conexion,$sql);
				while($mostrar=mysqli_fetch_array($result)){
				?>

				<tr>
					<td><?php echo $mostrar['materia'] ?></td>
					<td><?php echo $mostrar['industria'] ?></td>
					<td><?php echo $mostrar['boleta'] ?></td>
					<td><?php echo $mostrar['idinsumo'] ?></td>
					<td><?php echo $mostrar['costoPromedio'] ?></td>
				</tr>
				<?php 
				}
				 ?>
			</table>
		</div>
	</body>
</html>
