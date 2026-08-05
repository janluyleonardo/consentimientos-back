<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreConsentimientoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cedula' => ['required', 'string', 'max:50'],
            'fecha' => ['required', 'date'],
            'hora' => ['required', 'date_format:H:i'],
            'precio' => ['required', 'string', 'max:255'],
            'nombre_mascota' => ['required', 'string', 'max:255'],
            'raza' => ['required', 'string', 'max:255'],
            'otro_raza' => ['nullable', 'string', 'max:255'],
            'edad' => ['nullable', 'string', 'max:50'],
            'telefono' => ['nullable', 'string', 'max:50'],
            'nombre_dueno' => ['required', 'string', 'max:255'],
            'domicilio' => ['nullable', 'string', 'max:255'],
            'correo' => ['nullable', 'email', 'max:255'],
            'enfermedades' => ['nullable', 'string'],
            'observaciones' => ['nullable', 'string'],
            'antecedentes' => ['nullable', 'string'],
            'firma' => ['nullable', 'string'],
        ];
    }
}
