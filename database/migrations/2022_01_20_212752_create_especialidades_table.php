<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecialidadesTable extends Migration
{
	public function up()
	{
		Schema::create('especialidades', function (Blueprint $table) {
			$table->id();
			$table->string('nome')->length(50);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::table('especialidades', function (Blueprint $table) {
			$table->dropColumn(['deleted_at','created_at','updated_at']);
		});
	}
}
