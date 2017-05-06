<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMsConnectionEmployeesAgendasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ms_connection_employees_agendas', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('employees_id', 36)->index('fk_ms_connection_employees_agendas_ms_employees1_idx');
			$table->string('agends_id', 36)->index('fk_ms_connection_employees_agendas_ms_agendas1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ms_connection_employees_agendas');
	}

}
