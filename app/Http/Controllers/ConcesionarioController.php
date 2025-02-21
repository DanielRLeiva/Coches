<?php

namespace App\Http\Controllers;

use App\Models\Concesionario;
use Illuminate\Http\Request;

class ConcesionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concesionario = Concesionario::find(1);
        $motos = $concesionario->motos;
        $motoQuery = $concesionario->motos();
        $motoQuery->where()->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Concesionario $concesionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concesionario $concesionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concesionario $concesionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concesionario $concesionario)
    {
        //
    }
}
