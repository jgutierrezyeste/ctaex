<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResolucionRequest;
use App\Models\Resolucion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResolucionController extends Controller
{
    public function index():View
    {
        $resoluciones=Resolucion::all();
        return view('resoluciones.resolucion', compact('resoluciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('resoluciones.addresolucion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResolucionRequest $request):RedirectResponse
    {
        Resolucion::create($request->all());
        return redirect()->route('resoluciones.index')->with('success','Resolucion  añadida');
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
    public function edit(Resolucion $resolucione):View
    {
        return view('resoluciones.editresolucion', compact('resolucione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResolucionRequest $request, Resolucion $resolucione):RedirectResponse
    {
       $resolucione->update($request->all());
       return redirect()->route('resoluciones.index')->with('success','Actualizada resolucion'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resolucion $resolucione)
    {
        $resolucione->delete();
        return redirect()->route('resoluciones.index')->with('danger','Eliminada resolucion'); 

    }
}
