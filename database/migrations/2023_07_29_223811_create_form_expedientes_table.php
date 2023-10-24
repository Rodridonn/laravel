<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_expedientes', function (Blueprint $table) {
            
            $table->id();
            $table->string('imagenInputs',300);
            $table->string('nombre')->nullable();
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->string('lugar_de_nacimiento')->nullable();
            $table->date('fecha_de_nacimiento')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->bigInteger('cedula_de_identidad')->nullable();
            $table->string('profesion')->nullable();
            $table->bigInteger('whatsApp')->nullable();
            $table->string('email')->nullable();
            $table->string('laboral')->nullable();
            $table->string('licencias1')->nullable();
            $table->string('habilitaciones1')->nullable();
            $table->date('fecha1')->nullable();
            $table->string('licencias2')->nullable();
            $table->string('habilitaciones2')->nullable();
            $table->date('fecha2')->nullable();
            $table->string('licencias3')->nullable();
            $table->string('habilitaciones3')->nullable();
            $table->date('fecha3')->nullable();
            $table->string('instruccion1')->nullable();
            $table->string('universidad1')->nullable();
            $table->string('instruccion2')->nullable();
            $table->string('universidad2')->nullable();
            $table->string('instruccion3')->nullable();
            $table->string('universidad3')->nullable();
            $table->string('cargos1')->nullable();
            $table->string('institucion1')->nullable();
            $table->date('ffinicial1')->nullable();
            $table->date('ffinal1')->nullable();
            $table->string('cargos2')->nullable();
            $table->string('institucion2')->nullable();
            $table->date('ffinicial2')->nullable();
            $table->date('ffinal2')->nullable();
            $table->string('cargos3')->nullable();
            $table->string('institucion3')->nullable();
            $table->date('ffinicial3')->nullable();
            $table->date('ffinal3')->nullable();
            $table->string('reuniones1')->nullable();
            $table->string('lugar1')->nullable();
            $table->string('reuniones2')->nullable();
            $table->string('lugar2')->nullable();
            $table->string('reuniones3')->nullable();
            $table->string('lugar3')->nullable();
            $table->string('reentrenamiento1')->nullable();
            $table->date('fecha_reentrenamiento1')->nullable();
            $table->string('reentrenamiento2')->nullable();
            $table->date('fecha_reentrenamiento2')->nullable();
            $table->string('reentrenamiento3')->nullable();
            $table->date('fecha_reentrenamiento3')->nullable();
            $table->string('recurrentes1')->nullable();
            $table->date('fecha_recurrentes1')->nullable();
            $table->string('recurrentes2')->nullable();
            $table->date('fecha_recurrentes2')->nullable();
            $table->string('recurrentes3')->nullable();
            $table->date('fecha_recurrentes3')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_expedientes');
    }
};
