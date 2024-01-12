<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;



class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {

        $autos = Auto::paginate(3);
        return view('cars.index', compact('autos'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required', 'modelo' => 'required', 'anio' => 'required', 'precio' => 'required', 'descripcion' => 'required', 'imagen' => 'required|image|mimes:jpeg,png,svg,jpg|max:20024'
        ]);

         $auto = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'imagen/';
             $imagenAuto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenAuto);
             $auto['imagen'] = "$imagenAuto";             
         }
         
         Auto::create($auto);
         return redirect()->route('autos.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auto $auto)
    {
        return view('cars.editar', compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auto $auto)
    {
        $request->validate([
            'marca' => 'required', 'modelo' => 'required', 'anio' => 'required', 'precio' => 'required', 'descripcion' => 'required', 'imagen' => 'image|mimes:jpeg,png,svg,jpg|max:20024'
        ]);
         $aut = $request->all();
         if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'imagen/';
            $imagenAuto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenAuto);
            $aut['imagen'] = "$imagenAuto";
         }else{
            unset($aut['imagen']);
         }
         $auto->update($aut);
         return redirect()->route('autos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auto $auto)
    {
        $auto->delete();
        return redirect()->route('autos.index');
    }
}
