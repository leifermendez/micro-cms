<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscribersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suscribers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('email')->nullable();
			$table->dateTime('created_at')->nullable();
			$table->text('web')->nullable();
			$table->text('phone')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('suscribers');
	}

}
