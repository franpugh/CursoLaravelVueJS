<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
        $table->unsignedInteger('vianda_id'); 
        $table->foreign('vianda_id')->references('id')->on('viandas');
        $table->unsignedInteger('persona_id'); 
        $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('pedidos', function (Blueprint $table) {
         $table->dropColumn('vianda_id');
         $table->dropColumn('persona_id');
         });
    }
}
