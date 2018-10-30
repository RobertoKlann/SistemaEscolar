<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarColunaTabelaPessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoa', function(Blueprint $tabela) {
            $tabela->string('cidade', 50)->after('primeiro_nome');
            $tabela->string('estado', 2)->after('cidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoa', function(Blueprint $tabela) {
            $tabela->dropColumn('cidade');
            $tabela->dropColumn('estado');
        });
    }
}
