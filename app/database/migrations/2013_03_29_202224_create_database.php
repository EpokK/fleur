<?php

use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bouquets', function($table)
		{
			$table->increments('id');
			$table->string('nom', 100);
			$table->text('description')->nullable();
			$table->text('photo')->nullable();
			$table->boolean('etat')->default(true);
			$table->float('prix');
			$table->timestamps();
		});
		Schema::create('fleurs', function($table)
		{
			$table->increments('id');
			$table->string('nom', 100);
			$table->text('description')->nullable();
			$table->text('photo')->nullable();
			$table->boolean('etat')->default(true);
			$table->float('prix');
			$table->timestamps();
		});
		Schema::create('contenant', function($table)
		{
			$table->increments('id');
			$table->string('nom', 100);
			$table->text('description')->nullable();
			$table->text('photo')->nullable();
			$table->boolean('etat')->default(true);
			$table->float('prix');
			$table->timestamps();
		});
		Schema::create('couleurs', function($table)
		{
			$table->increments('id');
			$table->string('nom', 100)->unique();
			$table->string('couleur', 10);
		});
		Schema::create('formes', function($table)
		{
			$table->increments('id');
			$table->string('nom', 50)->unique();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bouquets');
		Schema::drop('fleurs');
		Schema::drop('contenant');
		Schema::drop('couleurs');
		Schema::drop('formes');
	}

}