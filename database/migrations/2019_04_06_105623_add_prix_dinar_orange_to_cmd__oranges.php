<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrixDinarOrangeToCmdOranges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cmd__oranges', function (Blueprint $table) {
          $table->decimal('prix_dinar_orange', 8, 2)->nullable(); 
          $table->decimal('prix_sinque_dinar_orange', 8, 2)->nullable();  
          $table->decimal('prix_light_orange', 8, 2)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cmd__oranges', function (Blueprint $table) {
            //
        });
    }
}
