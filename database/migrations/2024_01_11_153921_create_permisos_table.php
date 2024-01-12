<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
    public function up(): void
    {
        Schema::create('permisos', function (Blueprint $table) {
        $table->id();
        $table->datetime('fecha_creacion');
        $table->datetime('permiso_desde');
        $table->datetime('permiso_hasta');
        $table->text('justificacion');
        $table->text('observaciones');
        $table->unsignedBigInteger('id_empleado');
        $table->unsignedBigInteger('id_tipo_permiso');
        $table->unsignedBigInteger('id_estado_permiso');
        $table->timestamps();

        // Definición de claves foráneas
        $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('cascade');
        $table->foreign('id_tipo_permiso')->references('id')->on('tipo_permisos')->onDelete('cascade');
        $table->foreign('id_estado_permiso')->references('id')->on('estados_permiso')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
