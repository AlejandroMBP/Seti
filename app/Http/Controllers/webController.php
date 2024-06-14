<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function inicio()
    {
        return view('webSite.components.Inicio');
    }

    public function profesionales()
    {
        return view('webSite.components.profesionales');
    }
    public function servicioTecnico()
    {
        return view('webSite.components.servicioTecnico');
    }
    public function ofertas()
    {
        return view('webSite.components.ofertas');
    }
}
