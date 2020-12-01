<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('title')->nullable();
			$table->text('description')->nullable();
			$table->text('image')->nullable();
			$table->dateTime('created_at')->nullable();
			$table->text('subtitle')->nullable();
			$table->text('pay_link')->nullable();
			$table->integer('service')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog');
	}

}
