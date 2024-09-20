<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrestacionDependenciaEconomicaRequest;
use App\Models\PrestacionDependenciaEconomica;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrestacionDependenciaEconomicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $prestacioneseconomicas=PrestacionDependenciaEconomica::all();
        return view('prestacionesdependenciaseconomicas.prestaciondependenciaeconomica',compact('prestacioneseconomicas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('prestacionesdependenciaseconomicas.addprestaciondependenciaeconomica');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrestacionDependenciaEconomicaRequest $request):RedirectResponse
    {
        PrestacionDependenciaEconomica::create($request->all());
        return redirect()->route('prestacionDependenciasEconomicas.index')->with('success','Servicio subtipo añadido');
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
    public function edit(PrestacionDependenciaEconomica $prestacionDependenciasEconomica):View
    {
        return view('prestacionesdependenciaseconomicas.editprestaciondependenciaeconomica',compact('prestacionDependenciasEconomica'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrestacionDependenciaEconomicaRequest $request, PrestacionDependenciaEconomica $prestacionDependenciasEconomica):RedirectResponse
    {
       $prestacionDependenciasEconomica->update($request->all());
       return redirect()->route('prestacionDependenciasEconomicas.index')->with ('success', 'prestacion dependencia economica actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrestacionDependenciaEconomica $subtipoDependencia)
    {
        $subtipoDependencia->delete();
        return redirect()->route('prestacionDependenciasEconomicas.index')->with ('danger', 'prestacion dependencia economica eliminado');
    }

        
    public function getPrestacionDependenciaEconomicaById($id)
    {   
         
        $subtipo = PrestacionDependenciaEconomica::find($id);
      
        return $subtipo;
    }

public function actualizar(PrestacionDependenciaEconomicaRequest $request):RedirectResponse
    {
        $subtipo= PrestacionDependenciaEconomica::find($request->id);
        
        $subtipo->update($request->all());
        return redirect()->route('prestacionDependenciasEconomicas.index')->with('success','prestacio nDependencias Economicas actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $subtipo=PrestacionDependenciaEconomica::find($request->borrado);
        $subtipo->delete();
        return redirect()->route('prestacionDependenciasEconomicas.index')->with('danger','prestacion Dependencias Economicas eliminada');
    }
}
