<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMsCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ms_company', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->string('name', 36);
			$table->timestamps();
			$table->softDeletes();
			$table->string('employees_id', 36)->index('fk_ms_company_ms_employees1_idx');
			$table->string('client_id', 36)->index('fk_ms_company_ms_clients_idx');
			$table->string('comment')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ms_company');
	}

}
