<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price_total', 8, 2);   
            $table->integer('numero_commande')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('cmd_orange_id')->nullable();
            $table->unsignedInteger('cmd_oredoo_id')->nullable();
            $table->unsignedInteger('cmd_telecome_id')->nullable();
            $table->unsignedInteger('client_id');

            $table->foreign('client_id')
                   ->references('id')->on('clients')
                   ->onDelete('cascade');

            $table->foreign('cmd_orange_id')
                  ->references('id')->on('cmd__oranges')
                  ->onDelete('cascade');

           $table->foreign('cmd_oredoo_id')
                 ->references('id')->on('cmd__oredoos')
                 ->onDelete('cascade');
                 
          $table->foreign('cmd_telecome_id')
                 ->references('id')->on('cmd__telecomes')
                 ->onDelete('cascade');
 
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
        Schema::dropIfExists('commandes');
    }
}
