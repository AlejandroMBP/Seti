<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    function administrador(){
        return view('components.conDashboard');
    }
    function listarAdministradores(){
        //logica
        // $usuarios = User::all();
        
        // return view('components.listarAministrador',compact('usuarios'));
        $usuarios = User::paginate(6); // Pagina con 6 registros por página
        return view('components.listarAministrador', compact('usuarios'));
    }
}
