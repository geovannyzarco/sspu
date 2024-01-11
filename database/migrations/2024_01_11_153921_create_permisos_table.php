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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_creacion');
            $table->dateTime('permiso_desde');
            $table->datetime('permiso_hasta');
            $table->text('justificacion');
            $table->text('observaciones');
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_tipo_permiso')->references('id')->on('tipo_permisos');
            $table->foreign('id_estado')->references('id')->on('estado_permiso');
            $table->timestamps();
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
