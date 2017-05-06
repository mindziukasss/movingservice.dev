<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMsConnectionEmployeesAgendasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ms_connection_employees_agendas', function(Blueprint $table)
		{
			$table->foreign('agends_id', 'fk_ms_connection_employees_agendas_ms_agendas1')->references('id')->on('ms_agendas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('employees_id', 'fk_ms_connection_employees_agendas_ms_employees1')->references('id')->on('ms_employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ms_connection_employees_agendas', function(Blueprint $table)
		{
			$table->dropForeign('fk_ms_connection_employees_agendas_ms_agendas1');
			$table->dropForeign('fk_ms_connection_employees_agendas_ms_employees1');
		});
	}

}
