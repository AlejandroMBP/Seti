<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
{
    $credentials = $request->only('email', 'password');
    
    if (Auth::attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();

        // Obtener el usuario autenticado
        $user = Auth::user();
        $estado = $user->estado;

        // Verificar el estado del usuario
        if ($estado != 0) {
            // Si el estado del usuario es 1 (activo), redirigir a la ruta deseada
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        //matamos la sesion para que no ingrese y redireccionamos a la vista de la pagina
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // Si el estado del usuario no es 1, puedes redirigir a otra ruta o mostrar un mensaje de error
        return Redirect()->route('inicio');
    }

    return back()->withErrors([
        'email' => 'Las credenciales proporcionadas no son válidas.',
    ]);
}
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
