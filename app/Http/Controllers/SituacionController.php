<?php

namespace App\Http\Controllers;

use App\Http\Requests\SituacionRequest;
use App\Models\Situacion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SituacionController extends Controller
{
    public function index():View
    {
        $situaciones=Situacion::all();
        return view('situaciones.situacion', compact('situaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('situaciones.addsituacion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SituacionRequest $request):RedirectResponse
    {
        Situacion::create($request->all());
        return redirect()->route('situacion.index')->with('success','Situacion  añadida');
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
    public function edit(Situacion $situacion):View
    {
        return view('situaciones.editsituacion', compact('situacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SituacionRequest $request, Situacion $situacion):RedirectResponse
    {
       $situacion->update($request->all());
       return redirect()->route('situacion.index')->with('success','Actualizada Situacion'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Situacion $situacion)
    {
        $situacion->delete();
        return redirect()->route('situacion.index')->with('danger','Eliminada situacion'); 

    }
}
