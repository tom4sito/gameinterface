@extends('layouts.app')



@section('content')

<h1>Create Game</h1>

<form method="post" action="../crear">
	{{csrf_field()}}
	<label>Titulo</label><br>
	<input type="text" name="titulo" placeholder="entra el titulo"><br>

	<label>Skuid</label><br>
	<input type="text" name="skuid" placeholder="entra el SKUID"><br>

	<label>Cantidad</label><br>
	<input type="number" name="cantidad" min="0" max="99"><br>

	<label>Plataforma</label><br>
	<select name="plataforma">
		<option value="ps2">PS2</option>
	  	<option value="ps3">PS3</option>
	  	<option value="ps4">PS4</option>
	  	<option value="xbox">Xbox Original</option>
	  	<option value="xbox360">Xbox 360</option>
	  	<option value="xboxone">Xbox One</option>
	  	<option value="nintendowii">Nintendo Wii</option>
	  	<option value="nintendowiiu">Nintendo Wii U</option>
	  	<option value="nintendoswitch">Nintendo Switch</option>
	  	<option value="nintendowiiu">Nintendo DS</option>
	</select><br>

	<label>Descripcion</label><br>
	<textarea name="descripcion" rows="10" cols="30"></textarea><br>

	<label>Condicion</label><br>
	<select name="condicion">
		<option value="" selected disabled hidden>Seleccione aqui</option>
		<option value="usado">Usado</option>
		<option value="nuevo">Nuevo</option>
	</select><br>

	<label>Estudio</label><br>
	<input type="text" name="estudio" placeholder="entra el estudio"><br>

	<label>Precio Compra</label><br>
	<input type="text" name="precio_compra" placeholder="entra el precio de compra"><br>

	<label>Precio Venta</label><br>
	<input type="text" name="precio_venta" placeholder="entra el precio de venta"><br>



	
	<input type="submit" name="submit">
</form>

@endsection