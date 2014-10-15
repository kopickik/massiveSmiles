<?php 

use Faker\Factory as Faker;

class TodosTableSeeder extends Seeder {

  public function run() {
    $faker = Faker::create();
    foreach(range(1, 5) as $index) {
      Todo::create([
        'body' => $faker->realText($maxNmbChars = 16, $indexSize = 1),
        'completed' => $faker->boolean()
        ]);
    }
  }
}
