<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class CompraController extends Controller
{
    public function mostrarCompras()
    {
         $compras = Compra::paginate(5);
         return view('compras', compact('compras'));
    }
}
