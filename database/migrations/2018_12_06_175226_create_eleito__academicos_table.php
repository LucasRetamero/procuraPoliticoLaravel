<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEleitoAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleito_academicos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('eleito_id');
            $table->string('curso',100)->nullable();
            $table->string('grau',100)->nullable();
            $table->string('estabelecimento',100)->nullable();
            $table->string('local',100)->nullable();
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
        Schema::dropIfExists('eleito__academicos');
    }
}
