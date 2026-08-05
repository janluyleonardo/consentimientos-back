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
        Schema::table('consentimientos', function (Blueprint $table) {
            $table->string('cedula')->after('id');
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->string('precio')->nullable();
            $table->string('nombre_mascota')->nullable();
            $table->string('raza')->nullable();
            $table->string('otro_raza')->nullable();
            $table->string('edad')->nullable();
            $table->string('telefono')->nullable();
            $table->string('nombre_dueno')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('correo')->nullable();
            $table->string('enfermedades')->nullable();
            $table->text('observaciones')->nullable();
            $table->text('antecedentes')->nullable();
            $table->text('firma')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consentimientos', function (Blueprint $table) {
            $table->dropColumn([
                'cedula',
                'fecha',
                'hora',
                'precio',
                'nombre_mascota',
                'raza',
                'otro_raza',
                'edad',
                'telefono',
                'nombre_dueno',
                'domicilio',
                'correo',
                'enfermedades',
                'observaciones',
                'antecedentes',
                'firma',
            ]);
        });
    }
};
