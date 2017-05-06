<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMsCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ms_company', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_ms_company_ms_clients')->references('id')->on('ms_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('employees_id', 'fk_ms_company_ms_employees1')->references('id')->on('ms_employees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ms_company', function(Blueprint $table)
		{
			$table->dropForeign('fk_ms_company_ms_clients');
			$table->dropForeign('fk_ms_company_ms_employees1');
		});
	}

}
