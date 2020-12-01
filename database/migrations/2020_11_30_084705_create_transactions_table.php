<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('code')->nullable();
			$table->float('amount', 10, 0)->nullable();
			$table->text('status')->nullable();
			$table->dateTime('created_at')->nullable();
			$table->string('currency', 45)->nullable();
			$table->text('email')->nullable();
			$table->integer('id_agent')->nullable();
			$table->integer('id_user')->nullable();
			$table->text('coupon')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactions');
	}

}
