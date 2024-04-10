<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $newTrain = new Train();

        $newTrain->Azienda="Brico storto";
        $newTrain->Stazione_di_partenza="Salerno";
        $newTrain->Stazione_di_arrivo="Milano Centrale";
        $newTrain->Ora_di_partenza="14:00:00";
        $newTrain->ora_di_arrivo="20:00:00";
        $newTrain->Codice_treno="34652";
        $newTrain->Numero_carrozze="9";
        $newTrain->In_orario=true;
        $newTrain->Cancellato=false;
        $newTrain->save();

    }
}
