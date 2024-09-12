<?php

namespace App\Http\Controllers;

use App\Http\Requests\NivelDependenciaRequest;
use App\Models\NivelDependencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NivelDependenciaController extends Controller
{
    public function index():View
    {
        $niveles=NivelDependencia::all();
        return view('niveldependencias.niveldependencia', compact('niveles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('niveldependencias.addniveldependencia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NivelDependenciaRequest $request):RedirectResponse
    {
        NivelDependencia::create($request->all());
        return redirect()->route('nivelDependencias.index')->with('success','Nivel de Dependencias añadido');
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
    public function edit(NivelDependencia $nivelDependencia):View
    {
        return view('niveldependencias.editniveldependencia', compact('nivelDependencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NivelDependenciaRequest $request, NivelDependencia $nivelDependencia):RedirectResponse
    {
       $nivelDependencia->update($request->all());
       return redirect()->route('nivelDependencias.index')->with('success','Actualizado Nivel de Dependencias'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NivelDependencia $nivelDependencia)
    {
        $nivelDependencia->delete();
        return redirect()->route('nivelDependencias.index')->with('danger','Eliminado Nivel de Dependencia'); 

    }

    public function getNivelDependenciaById($id)
    {       
        $nivel = NivelDependencia::find($id);
       
        return $nivel;
    }

public function actualizar(NivelDependenciaRequest $request):RedirectResponse
    {
        $nivel=NivelDependencia::find($request->id);
        
        $nivel->update($request->all());
        return redirect()->route('nivelDependencias.index')->with('success','nivel dependencia actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $nivel=NivelDependencia::find($request->borrado);
        $nivel->delete();
        return redirect()->route('nivelDependencias.index')->with('danger','nivel dependencia eliminada');
    }
}
