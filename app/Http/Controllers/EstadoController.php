<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstadoRequest;
use App\Models\Estado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EstadoController extends Controller
{
    public function index():View
    {
        $estados=Estado::all();
        return view('estados.estado', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('estados.addestado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstadoRequest $request):RedirectResponse
    {
        Estado::create($request->all());
        return redirect()->route('estado.index')->with('success','Estado  añadido');
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
    public function edit(Estado $estado):View
    {
        return view('estados.editestado', compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstadoRequest $request, Estado $estado):RedirectResponse
    {
       $estado->update($request->all());
       return redirect()->route('estado.index')->with('success','Actualizado estado'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estado $estado)
    {
        $estado->delete();
        return redirect()->route('estado.index')->with('danger','Eliminado estado'); 

    }
}
