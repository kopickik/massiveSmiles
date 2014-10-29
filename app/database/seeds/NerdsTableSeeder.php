<?php 

use Faker\Factory as Faker;

class NerdsTableSeeder extends Seeder {

  public function run() {
    $faker = Faker::create();
    foreach(range(1, 5) as $index) {
      Nerd::create([
        'name' => $faker->name(),
        'email' => $faker->email(),
        'nerd_level' => $faker->randomNumber(2)
        ]);
    }
  }
}
