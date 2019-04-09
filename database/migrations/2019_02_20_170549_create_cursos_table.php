<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('cursos', function (Blueprint $table) {
			$table->increments('id')->index();
			$table->string('nombre');
			$table->string('cuenta_bamcaria');
			$table->string('lugar');
			$table->Date('fecha_curso');
			$table->Date('fecha_inicio');
			$table->Date('fecha_final');
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
		Schema::dropIfExists('cursos');
	}
}
