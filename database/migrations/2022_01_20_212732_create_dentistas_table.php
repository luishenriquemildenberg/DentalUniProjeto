<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDentistasTable extends Migration
{
	public function up()
	{
		Schema::create('dentistas', function (Blueprint $table) {
			$table->id();
			$table->string('name')->length(100);
			$table->string('email')->length(100);
			$table->integer('cro')->length(10);
			$table->string('cro_uf')->length(2);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::table('dentistas', function (Blueprint $table) {
			$table->dropColumn(['deleted_at','created_at','updated_at']);
		});
	}
}
