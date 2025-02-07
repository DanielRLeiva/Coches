<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;

class CochesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $precio = $request->input('precio');
        $anio = $request->input('anio');
        
        $query = Coche::query();

        if ($request->has('marca')) {
            $query->where('marca', 'like', "%{$request->marca}%");
        }

        if ($anio) {
            $query->anioMayorQue($anio);
        }

        if ($precio) {
            $query->precioMenorQue($precio);
        }

        $coches = $query->get();
        return view('coches', compact('coches'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearcoche');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'anio' => 'required|numeric',
            'precio' => 'required|numeric',
        ]);
        Coche::create($request->all());
        return redirect()->route('listacoches')->with('success', 'Coche creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coche = Coche::findOrFail($id);
        return view('mostrarcoche', compact('coche'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coche = Coche::findOrFail($id);
        return view('editarcoche', compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coche = Coche::findOrFail($id);

        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'anio' => 'required|numeric',
            'precio' => 'required|numeric',
        ]);
        $coche->update($request->all());
        return redirect()->route('listacoches')->with('success', 'Coche actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coche = Coche::findOrFail($id);
        $coche->delete();
        return redirect()->route('listacoches')->with('success', 'Coche eliminado');
    }
}
