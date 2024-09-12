<?php

namespace App\Http\Controllers;

use App\Http\Requests\DependenciaServicioSubtipoRequest;
use App\Models\DependenciaServicioSubtipo;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DependenciaServicioSubtipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $subtipos=DependenciaServicioSubtipo::all();
        return view('serviciodependenciassubtipos.serviciodependenciasubtipo',compact('subtipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('serviciodependenciassubtipos.addserviciodependenciasubtipo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DependenciaServicioSubtipoRequest $request):RedirectResponse
    {
        DependenciaServicioSubtipo::create($request->all());
        return redirect()->route('subtipoDependencias.index')->with('success','Servicio subtipo añadido');
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
    public function edit(DependenciaServicioSubtipo $subtipoDependencia):View
    {
        return view('serviciodependenciassubtipos.editserviciodependenciasubtipo',compact('subtipoDependencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DependenciaServicioSubtipoRequest $request, DependenciaServicioSubtipo $subtipoDependencia):RedirectResponse
    {
       $subtipoDependencia->update($request->all());
       return redirect()->route('subtipoDependencias.index')->with ('success', 'Servicio subtipo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DependenciaServicioSubtipo $subtipoDependencia)
    {
        $subtipoDependencia->delete();
        return redirect()->route('subtipoDependencias.index')->with ('danger', 'Servicio subtipo eliminado');
    }

        
    public function getServicioDependenciaSubtipoById($id)
    {   
         
        $subtipo = DependenciaServicioSubtipo::find($id);
      
        return $subtipo;
    }

public function actualizar(DependenciaServicioSubtipoRequest $request):RedirectResponse
    {
        $subtipo= DependenciaServicioSubtipo::find($request->id);
        
        $subtipo->update($request->all());
        return redirect()->route('subtipoDependencias.index')->with('success','servicio subtipo actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $subtipo=DependenciaServicioSubtipo::find($request->borrado);
        $subtipo->delete();
        return redirect()->route('subtipoDependencias.index')->with('danger','servicio subtipo eliminada');
    }
}
