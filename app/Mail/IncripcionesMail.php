<?php

namespace App\Mail;

use App\Model\Curso;
use App\Model\Inscripcion;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class IncripcionesMail extends Mailable {
	use Queueable, SerializesModels;
	public $subject = "Liga Contra el Cáncer";
	public $idins;
	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($ivalue) {
		$this->idins = $ivalue;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		$inscripcion = Inscripcion::find($this->idins);

		$curso = Curso::find($inscripcion->id_curso);

		return $this->view('mail.incripcion', ['tipo_inscripcion' => $inscripcion->tipo_inscripcion, 'curso' => $curso->nombre, 'fecha' => $curso->fecha_curso]);

	}
}
