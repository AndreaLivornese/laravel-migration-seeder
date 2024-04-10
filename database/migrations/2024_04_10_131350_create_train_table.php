<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->dateTimeTz('Ora di partenza');
            $table->dateTimeTz('ora di arrivo');
            $table->string('Codice treno', 6);
            $table->string('Numero carrozze', 2);
            $table->boolen('In orario');
            $table->boolen('Cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};
