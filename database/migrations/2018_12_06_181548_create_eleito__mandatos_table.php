<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEleitoMandatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleito_mandatos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('eleito_id');
            $table->string('partido')->nullable();
            $table->string('mandato')->nullable();
            $table->string('inicio')->nullable();
            $table->string('fim')->nullable();
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
        Schema::dropIfExists('eleito__mandatos');
    }
}
