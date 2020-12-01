<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopupadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('popupads', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('name')->nullable();
			$table->text('image')->nullable();
			$table->text('href')->nullable();
			$table->string('continent', 2)->nullable();
			$table->text('currency')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('popupads');
	}

}
