<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('inscripcions', function (Blueprint $table) {
			$table->increments('id')->index();
			$table->integer('id_curso')->unsigned();
			$table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');
			$table->integer('id_persona')->unsigned();
			$table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade');
			$table->integer('estado');
			$table->string('tipo_inscripcion');
			$table->string('voucher');
			$table->Date('fecha_inscripcion');
			$table->string('token');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('inscripcions');
	}
}
