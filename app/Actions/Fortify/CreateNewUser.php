<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Regras de validação login e Registrar
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => ['required', 'string', 'min:6' , 'confirmed'],
        ],
        //Errors messages feedbacks para user
        [
          'name.required' => 'O Campo Nome é obrigatório',
          'name.string' => 'O Campo Nome tem que ser um texto',
          'name.max' => 'O Campo Nome deve ter no máximo 255 caracteres',
          'email.required' => 'O Campo Email é obrigatório',
          'email.unique' => 'Email já cadastrado',
          'password.required' => 'O Campo Senha é obrigatório',
          'password.min' => 'A senha deve ter no mínimo 6 caracteres',
          'password.confirmed' => 'As senhas não conferem'
        ]

        )->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
