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
		DB::table('todos')->truncate();
		DB::table('nerds')->truncate();
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('LessonsTableSeeder');
		$this->call('TodosTableSeeder');
		$this->call('NerdsTableSeeder');
	}

}
