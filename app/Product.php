<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
	    'titulo', 'skuid', 'cantidad', 'plataforma',
	    'estudio', 'descripcion', 'condicion', 'precio_compra', 'posicion',
	    'precio_venta', 'foto_path',
	];
    //
}
