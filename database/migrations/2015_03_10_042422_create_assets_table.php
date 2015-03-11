<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assets', function(Blueprint $table)
		{
			$table->increments("id");
			$table->string("type");
			$table->string("name");
			$table->mediumText("description");
			$table->string("screenshot_path");
			$table->string("asset_path");
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
		Schema::drop('assets');
	}

}
