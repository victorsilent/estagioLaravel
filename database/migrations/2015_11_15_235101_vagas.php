<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vagas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('corpo');
            $table->integer('area');
            $table->integer('semestre');
            $table->bigInteger('auxilio');
            $table->integer('carga_horaria');
            $table->string('nome_empresa');
            $table->timestamps();
            $table->timestamp('publicacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
