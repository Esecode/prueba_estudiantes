<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<a href="index.php?c=estudiantes&a=nuevo" class="btn btn-dark">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-dark">
							<th>Tipo Documento</th>
							<th>Documento</th>
							<th>Primer Nombre</th>
							<th>Segundo Nombre</th>
							<th>Primer Apellido</th>
							<th>Segundo Apellido</th>
							<th>Estado</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["estudiantes"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["tipo_documento"]."</td>";
							echo "<td>".$dato["documento"]."</td>";
							echo "<td>".$dato["PrimerNombre"]."</td>";
							echo "<td>".$dato["SegundoNombre"]."</td>";
							echo "<td>".$dato["PrimerApellido"]."</td>";
							echo "<td>".$dato["SegundoApellido"]."</td>";
							echo "<td><a href='index.php?c=estudiantes&a=estado&id=".$dato["id"]."' class='btn btn-info'>".$dato["nom_estado"]."</a></td>";
							echo "<td><a href='index.php?c=estudiantes&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=estudiantes&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>