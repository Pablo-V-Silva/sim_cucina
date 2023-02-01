<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombustibilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combustibiles', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('tecnologia')->nullable();
            $table->double('potere_calorifero');
            $table->double('costo_unitario');
            $table->string('unita_di_misura');
            $table->double('costo_1kwh_lordo');
            $table->double('costo_1kwh_netto');
            $table->tinyInteger('resa_conversione');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combustibiles');
    }
}
