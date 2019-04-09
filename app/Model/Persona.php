<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {
	protected $table = 'personas';

	protected $fillable = [
		'id', 'nombre', 'dni', 'email', 'tipo_persona',
	];
}
