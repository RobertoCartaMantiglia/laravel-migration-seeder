<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 255);
            $table->string('stazione_partenza', 255);
            $table->string('stazione_arrivo', 255);
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->string('codice_treno', 10);
            $table->tinyInteger('numero_carrozze');
            $table->boolean('puntuale');
            $table->boolean('cancellato');

            $table->timestamps();
        });
    }
    // Ogni treno dovrà avere, oltre all'id come chiave primaria:
    // Azienda - di tipo stringa
    // Stazione di partenza - di tipo stringa
    // Stazione di arrivo  - di tipo stringa
    // Orario di partenza  - di tipo date time
    // Orario di arrivo  - di tipo date time
    // Codice Treno  - di tipo stringa
    // Numero Carrozze  - di tipo tiny integer
    // In orario  - di tipo booleano
    // Cancellato - di tipo booleano
    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
