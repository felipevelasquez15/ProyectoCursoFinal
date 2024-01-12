<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class CatalogoController extends Controller
{

    public function index()
    {
        return view('catalogo');
    }
    public function mostrarAutos()
    {
         $autos = Auto::all();
         return view('catalogo', compact('autos'));
    }
}
