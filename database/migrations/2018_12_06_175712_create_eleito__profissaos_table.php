<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEleitoProfissaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleito_profissaos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('eleito_id');
            $table->string('nome')->nullable();
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
        Schema::dropIfExists('eleito__profissaos');
    }
}
