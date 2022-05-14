<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDentistaEspecialidadesTable extends Migration
{
	public function up()
	{
		Schema::create('dentista_especialidades', function (Blueprint $table) {
			$table->id();
			$table->integer('especialidade_id');
			$table->integer('dentista_id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::table('dentista_especialidades', function (Blueprint $table) {
			$table->dropColumn(['deleted_at','created_at','updated_at']);
		});
	}
}
