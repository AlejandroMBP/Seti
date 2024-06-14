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
        $usuarios = User::all();

        return view('components.listarAministrador',compact('usuarios'));
    }
}
