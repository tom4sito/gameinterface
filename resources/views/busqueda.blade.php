@extends('layouts.app')



@section('content')

<h1>Busca Video Juego</h1>

<form method="get" action="obtenerjuego">
	{{csrf_field()}}
	<label>Criterio de Busqueda</label><br>
	<select name="criterio">
		<option value="titulo">Titulo</option>
	  	<option value="skuid">SKUID</option>
<!-- 	  	<option value="Estudio">Titulo</option>
	  	<option value="plataforma">SKUID</option> -->
	</select><br>

	<label>Entra Texto</label><br>
	<input type="text" name="informacion"><br>

	
	<input type="submit" name="submit">
</form>

@endsection