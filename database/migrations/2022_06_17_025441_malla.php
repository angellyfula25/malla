<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Malla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombAsignatura');
            $table->double('cantCreditos');
            $table->string('nombDocente');
            $table->string('prerrequisito');            
            $table->double('cantHorasTA');
            $table->double('cantHorasTD');
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
        //
    }
}
