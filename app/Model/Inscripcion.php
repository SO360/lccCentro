<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model {
	protected $table = 'inscripcions';

	protected $fillable = [
		'id', 'id_curso', 'id_persona', 'tipo_inscripcion', 'voucher', 'estado',
	];

	public function personsona_link() {
		return $this->belongsTo(Curso::class, 'id_curso');
	}
	public function imagenDepotContent_link() {
		return $this->belongsTo(image_depots::class, 'id_persona');
	}
}
