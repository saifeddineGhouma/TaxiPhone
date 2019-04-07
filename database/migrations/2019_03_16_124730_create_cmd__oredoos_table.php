<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmdOredoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmd__oredoos', function (Blueprint $table) {
            $table->increments('id');
               $table->string('name_ligte_one_dinar')->nullable();
            $table->integer('quentity_one_dinar')->nullable();
            $table->decimal('price_cmd_one_dinar', 8, 2)->nullable();

            $table->string('name_ligte_five_dinar')->nullable();
            $table->integer('quentity_five_dinar')->nullable();
            $table->decimal('price_cmd_five_dinar', 8, 2)->nullable();
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
        Schema::dropIfExists('cmd__oredoos');
    }
}
