<?php
	
?>

<!DOCTYPE html>
<html>
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
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=estudiantes&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />

				<div class="form-group">
					<label for="tipo_documento">Tipo Documento</label>
					<select name="tipo_documento" class="form-control">
					<option value="value="<?php echo $data["estudiantes"]["tipo_documento"]?>"><?php echo $data["estudiantes"]["tipo_documento"]?></option>
						<option value="TI">Tarjeta de identidad</option>
						<option value="CC">Cedula de ciudadania</option>
						<option value="CE">Cedula de extranjeria</option>
						<option value="PAS">Pasaporte</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="documento">Documento</label>
					<input type="text" class="form-control" id="documento" name="documento" value="<?php echo $data["estudiantes"]["documento"]?>" />
				</div>
				
				<div class="form-group">
					<label for="PrimerNombre">Primer Nombre</label>
					<input type="text" class="form-control" id="PrimerNombre" name="PrimerNombre" value="<?php echo $data["estudiantes"]["PrimerNombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="SegundoNombre">Segundo Nombre</label>
					<input type="text" class="form-control" id="SegundoNombre" name="SegundoNombre" value="<?php echo $data["estudiantes"]["SegundoNombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="PrimerApellido">Primer Apellido</label>
					<input type="text" class="form-control" id="PrimerApellido" name="PrimerApellido" value="<?php echo $data["estudiantes"]["PrimerApellido"]?>" />
				</div>
				
				<div class="form-group">
					<label for="SegundoApellido">Segundo Apellido</label>
					<input type="text" class="form-control" id="SegundoApellido" name="SegundoApellido" value="<?php echo $data["estudiantes"]["SegundoApellido"]?>" />
				</div>




				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		