<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEleitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleitos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('partido_id');
            $table->unsignedInteger('grupo_id');
            $table->text('imagem');
            $table->string('nome',150);
            $table->string('naturalidade',100);
            $table->date('nascimento');
            $table->string('sexo',50)->nullable();
            $table->string('estado',20)->nullable();
            $table->string('gabinete',150);
            $table->string('telefone',50);
            $table->string('email');
            $table->string('site');
            $table->string('escritorio');
            $table->string('escolaridade',100);
            $table->string('status',100);
            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->foreign('grupo_id')->references('id')->on('grupos');
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
        Schema::dropIfExists('eleitos');
    }
}
