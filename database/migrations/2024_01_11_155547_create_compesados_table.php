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
            $table->dateTime('fecha_creacion');
            $table->datetime('inicio_compesado');
            $table->dateTime('fin_compesado');
            $table->text('justificacion');
            $table->text('adjunto');
            $table->text('observaciones');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_estado')->references('id')->on('estado_compesado');
            $table->timestamps();
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
