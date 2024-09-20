<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrestacionDependenciaServicioRequest;
use App\Models\PrestacionDependenciaServicio;
use App\Models\NivelDependencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrestacionDependenciaServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $servicios=PrestacionDependenciaServicio::all();
        return view('prestacionesdependenciasservicios.prestaciondependenciaservicio',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('prestacionesdependenciasservicios.addprestaciondependenciaservicio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrestacionDependenciaServicioRequest $request)
    {
        PrestacionDependenciaServicio::create($request->all());
        return redirect()->route('prestacionDependenciasServicio.index')->with('success','Servicio añadido');
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
    public function edit(PrestacionDependenciaServicio $prestacionDependenciasServicio):View
    {
        return view ('prestacionesdependenciasservicios.editprestaciondependenciaservicio',compact('prestacionDependenciasServicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrestacionDependenciaServicioRequest $request, PrestacionDependenciaServicio $prestacionDependenciasServicio)
    {
        $prestacionDependenciasServicio->update($request->all());
        return redirect()->route('prestacionDependenciasServicios.index')->with('success','Servicio actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrestacionDependenciaServicio $prestacionDependenciasServicio)
    {
        $prestacionDependenciasServicio->delete();
        return redirect()->route('prestacionDependenciasServicios.index')->with('danger','Servicio eliminado');
    }

    
    public function getPrestacionDependenciaServicioById($id)
    {   
        $archivo=fopen("getservicioDependiencia.txt","w+");    
        $servicio = PrestacionDependenciaServicio::find($id);
       fwrite($archivo, print_r($servicio,true));
        return $servicio;
    }

public function actualizar(PrestacionDependenciaServicioRequest $request):RedirectResponse
    {
        $servicio= PrestacionDependenciaServicio::find($request->id);
        
        $servicio->update($request->all());
        return redirect()->route('prestacionDependenciasServicios.index')->with('success','servicio dependencia actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $servicio=PrestacionDependenciaServicio::find($request->borrado);
        $servicio->delete();
        return redirect()->route('prestacionDependenciasServicios.index')->with('danger','servicios dependencia eliminada');
    }
}
