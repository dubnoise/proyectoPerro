<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'username' => ['required', 'string', 'unique:users'],
            'password' => ['required',
                            // Rules\Password::defaults()
            ],
            'country' => ['required', 'string',],
            'city' => ['required', 'string',],
            'birthdate' => ['required', 'date'],
            'breed' => ['required',],
            'colour' => ['required', ],
            'genre' => ['required'],
        ];
    }
    public function messages(){
        return [
            'name.required' => 'El nombre es obligatorio',
            'email.required' => 'El email es obligatorio',
            'username.required' => 'El username es obligatorio',
            'password.required' => 'La contraseña es obligatoria',
            'country.required' => 'El país es obligatorio',
            'city.required' => 'La ciudad es obligatoria',
            'birthdate.required' => 'La fecha de nacimiento es obligatoria',
            'breed.required' => 'La raza es obligatoria',
            'colour.required' => 'El color es obligatorio',
            'genre.required' => 'El género es obligatorio',
        ];
    }
}
