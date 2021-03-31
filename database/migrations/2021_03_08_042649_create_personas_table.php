<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('paciente_id');
            $table->string("nombre");
            $table->string("apellidoPaterno");
            $table->string("apellidoMaterno");
            $table->string("email")->unique();
            $table->string("foto")->nullable();
            $table->date('fecha_naci')->nullable();
            $table->string('alergia')->nullable();
            $table->string('enfermedades')->nullable();
            $table->string('peso')->nullable();
            $table->string('estatura')->nullable();
            $table->string('temperatura')->nullable();
            $table->string('presion')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('nombre_responsable')->nullable();
            $table->string('parentesco')->nullable();
            $table->text('direccion')->nullable();
            $table->string("tel_1")->nullable();
            $table->string("tel_2")->nullable();
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('personas');
    }
}
