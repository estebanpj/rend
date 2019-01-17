<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRendicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendiciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fondo');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->integer('total');
            $table->text('estado');
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
        Schema::dropIfExists('rendiciones');
    }
}
