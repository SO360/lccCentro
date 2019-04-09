<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('personas', function (Blueprint $table) {
			$table->increments('id')->index();
			$table->string('nombre');
			$table->string('dni');
			$table->string('email');
			$table->string('numero');
			$table->string('tipo_persona');
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
		Schema::dropIfExists('personas');
	}
}
