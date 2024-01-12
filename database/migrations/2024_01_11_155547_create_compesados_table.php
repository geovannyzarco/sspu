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
        Schema::create('compesados', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha_creacion');
            $table->datetime('inicio_compensado');
            $table->datetime('fin_compensado');
            $table->text('justificacion');
            $table->text('adjunto');
            $table->text('observaciones');
            $table->unsignedBigInteger('id_estado_compesado');
            $table->unsignedBigInteger('id_empleado');
            $table->timestamps();

            // Definición de claves foráneas
            $table->foreign('id_estado_compesado')->references('id')->on('estado_compesado')->onDelete('cascade');
            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compesados');
    }
};
