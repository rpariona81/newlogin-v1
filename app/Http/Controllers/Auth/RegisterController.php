<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        // Crear un nuevo usuario
        $user = User::create($request->validated());;
        
        // Redirigir al usuario a la página de inicio de sesión con un mensaje de éxito
        return redirect()->route('login')->with('success', 'Registro exitoso. Por favor, inicia sesión.');
    }
}
