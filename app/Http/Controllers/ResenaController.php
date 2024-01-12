<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;
use Illuminate\Support\Facades\Auth;
class ResenaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resenas = Resena::paginate(5);
        return view('reseñ.index', compact('resenas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reseñ.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'asunto' => 'required', 'descripcion' => 'required'
        ]);

        $user_id = Auth::id();// Obtiene el ID del usuario autenticado (logueado)

        // Crea la reseña y asigna el user_id
        Resena::create([
            'asunto' => $request->input('asunto'),
            'descripcion' => $request->input('descripcion'),
            'user_id' => $user_id,
        ]);
         return redirect()->route('resenas.index'); //una vez creada retorna a la ruta reseñas.index
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resena $resena)
    {
        return view('reseñ.editar', compact('resena'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Resena $resena)
    {
        $request->validate([
            'asunto' => 'required','descripcion' => 'required'
        ]);
         $aut = $request->all();
         
         $resena->update($aut);
         return redirect()->route('resenas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resena $resena)
    {
        $resena->delete();
        return redirect()->route('resenas.index');
    }
}
