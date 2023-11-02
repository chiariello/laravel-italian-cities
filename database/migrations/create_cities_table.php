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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('codice_regione')->nullable();
            $table->string('codice_unita_territoriale_sovracomunale')->nullable();
            $table->string('codice_provincia_storico')->nullable();
            $table->string('progressivo_del_comune')->nullable();
            $table->string('codice_comune_formato_alfanumerico')->nullable();
            $table->string('denominazione_italiana_straniera')->nullable();
            $table->string('name');
            $table->string('denominazione_altra_lingua')->nullable();
            $table->string('codice_ripartizione_geografica')->nullable();
            $table->string('ripartizione_geografica')->nullable();
            $table->string('denominazione_regione')->nullable();
            $table->string('denominazione_unita_territoriale sovracomunale')->nullable();
            $table->string('tipologia unita_territoriale_sovracomunale')->nullable();
            $table->string('flag_comune_capoluogo_citta_metropolitana')->nullable();
            $table->string('sigla_automobilistica')->nullable();
            $table->string('codice_comune_formato_numerico')->nullable();
            $table->string('codice_comune_numerico_con_110_province')->nullable();
            $table->string('codice_comune_numerico_con_107_province')->nullable();
            $table->string('codice_comune_numerico_con_103_province')->nullable();
            $table->string('codice_catastale_del_comune')->nullable();
            $table->string('codice_NUTS1_2010')->nullable();
            $table->string('codice_NUTS2_2010')->nullable();
            $table->string('codice_NUTS3_2010')->nullable();
            $table->string('codice_NUTS1_2021')->nullable();
            $table->string('codice_NUTS2_2021')->nullable();
            $table->string('codice_NUTS3_2021')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
