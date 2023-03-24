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
            $table->double('poterecalorifero');
            $table->double('costounitario');
            $table->string('unitadimisura');
            $table->double('costo1kwhlordo');
            $table->double('costo1kwhnetto');
            $table->string('immagine')->nullable();
            $table->tinyInteger('resaconversione');
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
