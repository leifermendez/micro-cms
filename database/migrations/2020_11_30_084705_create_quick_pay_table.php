<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuickPayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quick_pay', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('description')->nullable();
			$table->dateTime('created_at')->nullable();
			$table->integer('id_user')->nullable();
			$table->float('amount', 10, 0)->nullable();
			$table->integer('id_agent')->nullable();
			$table->text('status')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quick_pay');
	}

}
