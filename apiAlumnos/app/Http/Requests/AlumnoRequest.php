<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
{
    /**
     * Determinamos si el usuario está autorizado para realizar esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtiene las reglas de validación que se aplican a la solicitud.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255|min:3',
            'apellidos' => 'required|string|max:255|min:3',
            'email' => 'required|email|max:255|min:3',
            'telefono' => 'required|string|max:9|min:9',
            'direccion' => 'required|string|max:255|min:3',
        ];
    }
}
