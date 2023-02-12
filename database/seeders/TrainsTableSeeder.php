<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_train_obj = new Train();
            $new_train_obj->azienda = $faker->word();
            $new_train_obj->stazione_partenza = $faker->name();
            $new_train_obj->stazione_arrivo = $faker->name();
            $new_train_obj->orario_partenza = $faker->dateTime();
            $new_train_obj->orario_arrivo = $faker->dateTime();
            $new_train_obj->codice_treno = $faker->randomNumber(5, true);
            $new_train_obj->numero_carrozze = $faker->randomDigitNotNull();
            $new_train_obj->puntuale = $faker->boolean(true, false);
            $new_train_obj->cancellato = $faker->boolean(true, false);
            $new_train_obj->save();
        }
    }
}
