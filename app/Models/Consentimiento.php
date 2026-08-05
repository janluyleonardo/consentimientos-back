<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consentimiento extends Model
{
    /** @use HasFactory<\Database\Factories\ConsentimientoFactory> */
    use HasFactory;

    protected $fillable = [
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
    ];
}
