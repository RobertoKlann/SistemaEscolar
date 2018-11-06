<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbcursos', function (Blueprint $table) {
            $table->increments('crocodigo')->unique()->unsigned();
            $table->string('cronome', 250);
            $table->string('crodescricao', 250);
            $table->string('crototalhoras', 20);
            $table->string('cromensalidade', 20);
            $table->timestamps();

            // $table->primary('crocodigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbcursos');
    }
}
