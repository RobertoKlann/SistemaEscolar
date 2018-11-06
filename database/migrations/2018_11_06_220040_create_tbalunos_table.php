<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbalunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbalunos', function (Blueprint $table) {
            $table->increments('alncodigo')->unique()->unsigned();
            $table->string('alnnome', 256);
            $table->string('alncpf', 25);
            $table->string('alnemail', 50);
            $table->string('alnfone', 25);
            $table->date('alndatanascimento');
            $table->timestamps();

            // $table->primary('alncodigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbalunos');
    }
}
