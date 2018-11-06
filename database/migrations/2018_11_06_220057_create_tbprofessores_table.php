<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbprofessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbprofessores', function (Blueprint $table) {
            $table->increments('prfcodigo')->unique()->unsigned();
            $table->string('prffone');
            $table->string('prfnome');
            $table->string('prfemail');
            $table->string('prfcurriculo');
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
        Schema::dropIfExists('tbprofessores');
    }

}
