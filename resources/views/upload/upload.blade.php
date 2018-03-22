<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Subir Foto Para Video Juego</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<br>
	<div class="col-lg-offset-6 col-lg-6">
		<h1>Sube Foto Del Video Juego</h1>
		<form action="guardar" enctype="multipart/form-data" method="post">
			{{csrf_field()}}
			<label>ID del Video Juego</label><br>
			<input type="text" name="foto_id" placeholder="entra id del videojuego">
			<br>
			<br>
			<input type="file" name="foto" value="selecciona foto">
			<br>
			<input type="submit" value="subir">
		</form>
	</div>

</body>
</html>