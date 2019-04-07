<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrixSinqueDinarOredooToCmdOredoos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cmd__oredoos', function (Blueprint $table) {
            $table->decimal('prix_dinar_oredoo', 8, 2)->nullable(); 
          $table->decimal('prix_sinque_dinar_oredoo', 8, 2)->nullable();  
          $table->decimal('prix_light_oredoo', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cmd__oredoos', function (Blueprint $table) {
            //
        });
    }
}
