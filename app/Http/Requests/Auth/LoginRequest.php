<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "cpf" => "required",
            "email" => "required",
            "password" => "required|min:5|max:20",
        ];
    }
}
