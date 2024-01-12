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
            $table->string('codigo', 20);
            $table->string('nombre', 100);
            $table->date('fecha_nacimiento');
            $table->integer('codigo_huella');
            $table->integer('codigo_huella_2');
            $table->unsignedBigInteger('id_tipo_empleado');
            $table->unsignedBigInteger('id_horario');
            $table->unsignedBigInteger('id_cargo');
            $table->unsignedBigInteger('id_area');
            $table->unsignedBigInteger('id_categoria');
            $table->timestamps();

            // Definición de claves foráneas
            $table->foreign('id_tipo_empleado')->references('id')->on('tipos')->onDelete('cascade');
            $table->foreign('id_horario')->references('id')->on('horarios')->onDelete('cascade');
            $table->foreign('id_cargo')->references('id')->on('cargos')->onDelete('cascade');
            $table->foreign('id_area')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
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
