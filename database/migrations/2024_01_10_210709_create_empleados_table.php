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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nac');
            $table->integer('cod_huella_1');
            $table->integer('cod_huella_2');
            $table->foreign('id_area')->references('id')->on('areas');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->foreign('id_cargo')->references('id')->on('cargos');
            $table->foreign('id_horario')->references('id')->on('horarios');
            $table->foreign('id_tipo_empleado')->references('id')->on('tipos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
