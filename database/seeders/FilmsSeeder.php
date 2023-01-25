<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;
use Faker\Generator as Faker;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<30; $i++){
            $film = new Film();
            $film->name = $faker->words(rand(1,4), true);
            $film->description = $faker->paragraph();
            $film->release_date = $faker->date();
            $film->genre = $faker->word();
            $film->save();
        }
    }
}