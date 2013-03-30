<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('BouquetTableSeeder');
		$this->call('FleurTableSeeder');
	}

}

class BouquetTableSeeder extends Seeder {

    public function run()
    {
        DB::table('bouquets')->delete();

        Bouquet::create(array('nom' => 'Riri', 'prix' => 20, 'photo' => 'bouquet1.png'));
        Bouquet::create(array('nom' => 'Fifi', 'prix' => 30, 'photo' => 'bouquet1.png'));
        Bouquet::create(array('nom' => 'Loulou', 'prix' => 40, 'photo' => 'bouquet1.png'));
    }

}

class FleurTableSeeder extends Seeder {

    public function run()
    {
        DB::table('fleurs')->delete();

        // Fleur::create(array('email' => 'foo@bar.com'));
    }

}

