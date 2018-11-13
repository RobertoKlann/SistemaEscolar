<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbturmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbturmas', function (Blueprint $table) {
            $table->increments('trmcodigo')->unique()->unsigned();
            $table->integer('trmprofessor')->unsigned();
            $table->integer('trmcurso')->unsigned();
            $table->date('trmdatainicio');
            $table->date('trmdatafinal');
            $table->string('trmtotalhoras');
            $table->timestamps();

            $table->foreign('trmprofessor')->references('prfcodigo')->on('tbprofessores');
            $table->foreign('trmcurso')->references('crocodigo')->on('tbcursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbturmas');
    }
}
