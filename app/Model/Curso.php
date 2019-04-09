<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {
	protected $table = 'cursos';

	protected $fillable = [
		'id', 'nombre', 'cuentab', 'lugar', 'fecha',
	];
}
