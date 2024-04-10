<?php

namespace Database\Seeders;

require_once 'vendor/autoload.php';

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // $faker = Faker\Factory::create();
        

        for ($i=0; $i < 10; $i++) { 
            $newTrain = new Train();
    
    
            $newTrain->Azienda=$faker->word();
            $newTrain->Stazione_di_partenza=$faker->word();
            $newTrain->Stazione_di_arrivo=$faker->word();
            $newTrain->Data=$faker->dateTimeBetween('-1 day','+1 week');
            $newTrain->Ora_di_partenza=$faker->time();
            $newTrain->ora_di_arrivo=$faker->time();
            $newTrain->Codice_treno=$faker->randomNumber(5, true);;
            $newTrain->Numero_carrozze=$faker->randomDigit();
            $newTrain->In_orario=$faker->boolean();
            $newTrain->Cancellato=$faker->boolean();
            $newTrain->save();
        }

    }
}
