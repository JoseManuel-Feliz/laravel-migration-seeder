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
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('azienda', 50)->nullable(false);
            $table->string('stazione_partenza', 50)->nullable(false);
            $table->string('stazione_arrivo', 50)->nullable(false);
            $table->dateTimeTz('orario_partenza')->nullable(false);
            $table->dateTimeTz('orario_arrivo')->nullable(false);
            $table->string('codice_treno', 10)->nullable(false);
            $table->tinyInteger('numero_carrozze')->nullable(true);
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
