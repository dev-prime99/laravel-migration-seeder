<?php

use App\Fumetti;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class FumettiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $data = [
          'title' => $faker -> word,
          'author' => $faker -> word,
          'year' => $faker -> year,
          'review' => $faker -> text,
          'vote' => $faker -> numberBetween($min = 1, $max = 10)
        ];
        $fumetti = new Fumetti;
        $fumetti -> fill($data);
        $fumetti -> save();
      }
    }
}
