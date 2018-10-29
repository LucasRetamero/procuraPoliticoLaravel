<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEleitoProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleito_projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('eleito_id');
            $table->string('materia')->nullable();
            $table->string('ementa')->nullable();
            $table->text('autor')->nullable();
            $table->date('data')->nullable();
            $table->foreign('eleito_id')->references('id')->on('eleitos');  
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
        Schema::dropIfExists('eleito__projetos');
    }
}
