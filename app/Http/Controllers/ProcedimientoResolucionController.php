<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcedimientoResolucionRequest;
use App\Models\ProcedimientoResolucion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProcedimientoResolucionController extends Controller
{
    public function index():View
    {
        $procedimientos=ProcedimientoResolucion::all();
        return view('procedimientosresoluciones.procedimientoresolucion', compact('procedimientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('procedimientosresoluciones.addprocedimientoresolucion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProcedimientoResolucionRequest $request):RedirectResponse
    {
        ProcedimientoResolucion::create($request->all());
        return redirect()->route('procedimientosresoluciones.index')->with('success','Porcedimiento Resolucion  añadido');
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
    public function edit(ProcedimientoResolucion $procedimientosresolucione):View
    {
        return view('procedimientosresoluciones.editprocedimientoresolucion', compact('procedimientosresolucione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProcedimientoResolucionRequest $request, ProcedimientoResolucion $procedimientosresolucione):RedirectResponse
    {
       $procedimientosresolucione->update($request->all());
       return redirect()->route('procedimientosresoluciones.index')->with('success','Actualizado procedimiento resolucion'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProcedimientoResolucion $procedimientosresolucione)
    {
        $procedimientosresolucione->delete();
        return redirect()->route('procedimientosresoluciones.index')->with('danger','Eliminado procedimiento resolucion'); 

    }
}
