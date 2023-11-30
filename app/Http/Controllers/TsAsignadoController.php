<?php

namespace App\Http\Controllers;

use App\Http\Requests\TsAsignadoRequest;
use App\Models\TsAsignado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TsAsignadoController extends Controller
{
    public function index():View
    {
        $trabajadores=TsAsignado::all();
        return view('tsasignados.tsasignado', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('tsasignados.addtsasignado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TsAsignadoRequest $request):RedirectResponse
    {
        TsAsignado::create($request->all());
        return redirect()->route('tsAsignados.index')->with('success','Trabajador Social añadido');
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
    public function edit(TsAsignado $tsAsignado):View
    {
        return view('tsasignados.edittsasignado', compact('tsAsignado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TsAsignadoRequest $request, TsAsignado $tsAsignado):RedirectResponse
    {
       $tsAsignado->update($request->all());
       return redirect()->route('tsAsignados.index')->with('success','Actualizado Trabajador Social'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TsAsignado $tsAsignado)
    {
        $tsAsignado->delete();
        return redirect()->route('tsAsignados.index')->with('danger','Eliminado trabajador social'); 

    }
}
