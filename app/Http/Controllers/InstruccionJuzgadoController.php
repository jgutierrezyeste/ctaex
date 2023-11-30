<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstruccionJuzgadoRequest;
use App\Models\InstruccionJuzgado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InstruccionJuzgadoController extends Controller
{
     public function index():View
    {
        $juzgados=InstruccionJuzgado::all();
        return view('instruccionjuzgados.instruccionjuzgado', compact('juzgados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('instruccionjuzgados.addinstruccionjuzgado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InstruccionJuzgadoRequest $request):RedirectResponse
    {
        InstruccionJuzgado::create($request->all());
        return redirect()->route('juzgadoInstruccion.index')->with('success','Juzgado de instrucción añadido');
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
    public function edit(InstruccionJuzgado $juzgadoInstruccion):View
    {
        return view('instruccionjuzgados.editinstruccionjuzgado', compact('juzgadoInstruccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstruccionJuzgadoRequest $request, InstruccionJuzgado $juzgadoInstruccion):RedirectResponse
    {
       $juzgadoInstruccion->update($request->all());
       return redirect()->route('juzgadoInstruccion.index')->with('success','Actualizado Juzgado de Instrucción'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstruccionJuzgado $juzgadoInstruccion)
    {
        $juzgadoInstruccion->delete();
        return redirect()->route('juzgadoInstruccion.index')->with('danger','Eliminado Juzgado de Instruccion'); 

    }
}
