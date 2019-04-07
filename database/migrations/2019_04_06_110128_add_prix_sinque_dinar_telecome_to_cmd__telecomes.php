<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrixSinqueDinarTelecomeToCmdTelecomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cmd__telecomes', function (Blueprint $table) {
              $table->decimal('prix_dinar_telecome', 8, 2)->nullable(); 
          $table->decimal('prix_sinque_dinar_telecome', 8, 2)->nullable();  
          $table->decimal('prix_light_telecome', 8, 2)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cmd__telecomes', function (Blueprint $table) {
            //
        });
    }
}
