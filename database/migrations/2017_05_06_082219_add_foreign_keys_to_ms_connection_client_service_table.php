<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMsConnectionClientServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ms_connection_client_service', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_ms_connection_client_service_ms_clients1')->references('id')->on('ms_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('service_id', 'fk_ms_connection_client_service_ms_sevices1')->references('id')->on('ms_sevices')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ms_connection_client_service', function(Blueprint $table)
		{
			$table->dropForeign('fk_ms_connection_client_service_ms_clients1');
			$table->dropForeign('fk_ms_connection_client_service_ms_sevices1');
		});
	}

}
