<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCombustibileIdToConsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consumos', function (Blueprint $table) {
            $table->unsignedBigInteger('combustibile_id')->nullable()->after('id');
            $table->foreign('combustibile_id')->references('id')->on('combustibiles')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consumos', function (Blueprint $table) {
            $table->dropForeign('consumos_combustibile_id_foreign');
            $table->dropColumn('combustibile_id');
        });
    }
}
