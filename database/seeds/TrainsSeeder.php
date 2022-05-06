<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;
class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<100; $i++){
            $train = new Train();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $train->binario = $faker->randomDigitNot(0);
            $train->numero_carrozze = $faker->randomDigitNot(0);
            $train->save();
        }
    }
}
