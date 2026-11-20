<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
            'username' => ['required'],
            'password' => ['required'],
        ];
    }

    public function getCredentials(): array
    {
        $username = $this->get('username');

        if($this->isEmail($username)) {
            return [
                'email' => $username,
                'password' => $this->get('password'),
            ];
        }
        return $this->only('email', 'password');
    }

    public function isEmail($value): bool
    {
        $factory = $this->container->make(ValidationFactory::class);
        return $factory->make(['email' => $value], ['email' => 'email'])->passes();
    }
}
