<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Obtén el usuario autenticado
            $user = Auth::user();
            // Verifica si es la primera vez que el usuario inicia sesión
            if (!$user->is_verified) {
                // Enviar correo electrónico con el código de verificación (implementar esta lógica)
                // Redirige al usuario a la vista de verificación (puede ser manejada por UsersController)
                return redirect()->route('auth.authentication');
            }
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
