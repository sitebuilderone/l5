<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLwpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('listing', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company_name');
			$table->text('description');
			$table->string('city');
			$table->string('state');
			$table->string('URL');
			$table->string('phone');
			// social media
			$table->string('twitter');
			$table->string('facebook');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('listing');
	}

}
