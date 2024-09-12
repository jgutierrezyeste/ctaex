<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrestacionDependenciaRequest;
use App\Models\PrestacionDependencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrestacionDependenciaController extends Controller
{
    public function index():View
    {
        $prestaciones=PrestacionDependencia::all();
        return view('prestacionesdependencias.prestaciondependencia', compact('prestaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('prestacionesdependencias.addprestaciondependencia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrestacionDependenciaRequest $request):RedirectResponse
    {
        PrestacionDependencia::create($request->all());
        return redirect()->route('prestacionDependencias.index')->with('success','Prestación dependencia añadida');
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
    public function edit(PrestacionDependencia $prestacionDependencia):View
    {
        return view('prestacionesdependencias.editprestaciondependencia', compact('prestacionDependencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrestacionDependenciaRequest $request, PrestacionDependencia $prestacionDependencia):RedirectResponse
    {
       $prestacionDependencia->update($request->all());
       return redirect()->route('prestacionDependencias.index')->with('success','Actualizada Prestación Dependencia'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrestacionDependencia $prestacionDependencia)
    {
        $prestacionDependencia->delete();
        return redirect()->route('prestacionDependencias.index')->with('danger','Eliminada prestacion dependencia'); 

    }

    public function getPrestacionDependenciaById($id)
    {   
         
        $prestacion = PrestacionDependencia::find($id);
      
        return $prestacion;
    }

public function actualizar(PrestacionDependenciaRequest $request):RedirectResponse
    {
        $prestacion= PrestacionDependencia::find($request->id);
        
        $prestacion->update($request->all());
        return redirect()->route('prestacionDependencias.index')->with('success','prestacion dependencias actualizada');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $prestacion=PrestacionDependencia::find($request->borrado);
        $prestacion->delete();
        return redirect()->route('prestacionDependencias.index')->with('danger','prestacion dependencia eliminada');
    }
}
