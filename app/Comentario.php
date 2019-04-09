<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model {
	protected $table = 'comentarios';

	protected $fillable = [
		'id', 'nombre', 'email', 'mensaje', 'slug',
	];
}
