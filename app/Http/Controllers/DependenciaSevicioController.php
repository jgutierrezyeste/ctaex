<?php

namespace App\Http\Controllers;

use App\Http\Requests\DependenciaServicioRequest;
use App\Models\DependenciaServicio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DependenciaSevicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $servicios=DependenciaServicio::all();
        return view('serviciosdependencias.serviciodependencia',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('serviciosdependencias.addserviciodependencia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DependenciaServicioRequest $request)
    {
        DependenciaServicio::create($request->all());
        return redirect()->route('serviciosDependencias.index')->with('success','Servicio añadido');
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
    public function edit(DependenciaServicio $serviciosDependencia):View
    {
        return view ('serviciosdependencias.editserviciodependencia',compact('serviciosDependencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DependenciaServicioRequest $request, DependenciaServicio $serviciosDependencia)
    {
        $serviciosDependencia->update($request->all());
        return redirect()->route('serviciosDependencias.index')->with('success','Servicio actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DependenciaServicio $serviciosDependencia)
    {
        $serviciosDependencia->delete();
        return redirect()->route('serviciosDependencias.index')->with('danger','Servicio eliminado');
    }
}
