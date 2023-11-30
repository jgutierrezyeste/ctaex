<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrestacionRequest;
use App\Models\Prestacion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrestacionController extends Controller
{
    public function index():View
    {
        $prestaciones=Prestacion::all();
        return view('prestaciones.prestacion', compact('prestaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('prestaciones.addprestacion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrestacionRequest $request):RedirectResponse
    {
        Prestacion::create($request->all());
        return redirect()->route('prestaciones.index')->with('success','Prestacion  añadida');
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
    public function edit(Prestacion $prestacione):View
    {
        return view('prestaciones.editprestacion', compact('prestacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrestacionRequest $request, Prestacion $prestacione):RedirectResponse
    {
       $prestacione->update($request->all());
       return redirect()->route('prestaciones.index')->with('success','Actualizada Prestacion'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestacion $prestacione)
    {
        $prestacione->delete();
        return redirect()->route('prestaciones.index')->with('danger','Eliminada prestacion'); 

    }
}
