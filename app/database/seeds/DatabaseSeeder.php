<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('lessons')->truncate();
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('LessonsTableSeeder');
	}

}
