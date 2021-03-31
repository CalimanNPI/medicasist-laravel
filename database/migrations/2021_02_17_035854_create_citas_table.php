<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id('cita_id');
            $table->text('motivo')->nullable();
            $table->date('fecha_programada')->nullable();
            $table->time('hora_programada')->nullable();
            $table->string('planta')->nullable();
            $table->string('num_cama')->nullable();         
            $table->text('observaciones')->nullable();
            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')->references('medico_id')->on('medicos');
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('paciente_id')->on('personas');
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
        Schema::dropIfExists('citas');
    }
}
