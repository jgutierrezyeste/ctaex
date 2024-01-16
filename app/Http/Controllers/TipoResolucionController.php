<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoResolucionRequest;
use App\Models\TipoResolucion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TipoResolucionController extends Controller
{
    public function index():View
    {
        $tipos=TipoResolucion::all();
        return view('tiposresoluciones.tiporesolucion', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('tiposresoluciones.addtiporesolucion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoResolucionRequest $request):RedirectResponse
    {
        TipoResolucion::create($request->all());
        return redirect()->route('tiposresoluciones.index')->with('success','TIpo Resolucion  añadido');
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
    public function edit(TipoResolucion $tiposresolucione):View
    {
        return view('tiposresoluciones.edittiporesolucion', compact('tiporesolucione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoResolucionRequest $request, TipoResolucion $tiposresolucione):RedirectResponse
    {
       $tiposresolucione->update($request->all());
       return redirect()->route('tiposresoluciones.index')->with('success','Actualizado tipo resolucion'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoResolucion $tiposresolucione)
    {
        $tiposresolucione->delete();
        return redirect()->route('tiposresoluciones.index')->with('danger','Eliminado tipo resolucion'); 

    }
}
