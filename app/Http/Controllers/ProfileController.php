<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // $request->user()->fill($request->validated());

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }

        // $request->user()->save();

        // return Redirect::route('profile.edit')->with('status', 'profile-updated');
        $user = $request->user();
        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        if ($request->input('source') === 'table') {
            return Redirect::route('list.titulados')->with('status', 'Usuario actualizado correctamente.');
        }
            return Redirect::route('profile.edit')->with('status', 'Perfil actualizado correctamente.');
    }

    public function destroy(Request $request){

        $user = $request->user();
        $user->estado = 0;
        $user->save();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect()->route('inicio');
    }
    public function disable($id, Request $request){
        
        // $user = $request->user();
        $session = Auth::user()->id;
        $idsessiont = User::find($id)->id;
        // return $idsessiont;
        
        $user = User::find($id);
        $estado = $user->estado;  
        if ($session == $idsessiont) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            $user->estado = 0 ;
            $user->save();
            return Redirect()->route('inicio');
        }elseif($estado != 1){
            $user->estado = 1; // Asumiendo que 0 es el estado deshabilitado
            $user->save();
            return redirect()->back()->with('success', 'Usuario deshabilitado correctamente.');
        }else{
            $user->estado = 0 ;
            $user->save();
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }
    }

}
