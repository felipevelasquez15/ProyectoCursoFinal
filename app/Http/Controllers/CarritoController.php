<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Auto;
use App\Models\Compra;
use Illuminate\Support\Facades\Auth;



class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function comprar($id)
     {
         // Encuentra el carrito por ID
         $carrito = Carrito::findOrFail($id);

         Compra::create([
            'user_id' => $carrito->user_id,
            'auto_id' => $carrito->auto_id,
            'marca' => $carrito->marca,
            'modelo' => $carrito->modelo,
            'anio' => $carrito->anio,
            'precio' => $carrito->precio,
            'descripcion' => $carrito->descripcion,
            'imagen' => $carrito->imagen,
            // Otros campos que puedas necesitar en la tabla de compras
        ]);

         // Elimina el carrito de la tabla Carritos
         $carrito->delete();
         
         // Elimina el auto asociado al carrito de la tabla Autos
        //  Auto::findOrFail($carrito->auto_id)->delete();
     
         
     
         // Puedes realizar otras acciones relacionadas con la compra aquí
     
         // Redirige o responde según tus necesidades
         return redirect()->route('carritos.index')->with('success', 'Compra realizada con éxito');
     }

    public function index()
    {
        $carritos = Carrito::paginate(5);
        return view('carrito.index', compact('carritos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carrito.crear');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $user_id = Auth::id();
        $auto_id = $request->input('auto_id');
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;

        $auto = Auto::findOrFail($auto_id);

// Acceder a los campos del auto
        $marca = $auto->marca;
        $modelo = $auto->modelo;
        $anio = $auto->anio;
        $precio = $auto->precio;
        $descripcion = $auto->descripcion;
        $imagen = $auto->imagen;

        // Crea y asigna el user_id
        Carrito::create([
            'user_id' => $user_id,
            'auto_id' => $auto_id,
            'name' => $user_name,
            'email' => $user_email, 
            'marca' => $marca,
            'modelo' => $modelo,
            'anio' => $anio,
            'precio' => $precio,
            'descripcion' => $descripcion,
            'imagen' => $imagen,

            
        ]);
         return redirect()->route('carritos.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrito $carrito)
    {
        return view('carrito.editar', compact('carrito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrito $carrito)
    {
         $aut = $request->all();
         
         $carrito->update($aut);
         return redirect()->route('carritos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrito $carrito)
    {
        $carrito->delete();
        return redirect()->route('carritos.index');
    }
}
