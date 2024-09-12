<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpcionAutorizacionRequest;
use App\Http\Requests\OpcionRevisionRequest;
use App\Models\OpcionAutorizacion;
use App\Models\OpcionRevision;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OpcionAutorizacionController extends Controller
{
    public function index():View
    {
        $opciones=OpcionAutorizacion::all();
        return view('opcionesautorizacion.opcionautorizacion', compact('opciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('opcionesautorizacion.addopcionautorizacion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OpcionAutorizacionRequest $request):RedirectResponse
    {
        OpcionAutorizacion::create($request->all());
        return redirect()->route('opcionAutorizacion.index')->with('success','Opción autorizacion añadida');
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
    public function edit(OpcionAutorizacion $opcionAutorizacion):View
    {
        return view('opcionesautorizacion.editopcionautorizacion', compact('opcionAutorizacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OpcionAutorizacionRequest $request, OpcionAutorizacion $opcionAutorizacion):RedirectResponse
    {
       $opcionAutorizacion->update($request->all());
       return redirect()->route('opcionAutorizacion.index')->with('success','Actualizada opcion de Revisión'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpcionAutorizacion $opcionAutorizacion)
    {
        $opcionAutorizacion->delete();
        return redirect()->route('opcionAutorizacion.index')->with('danger','Eliminada opcion de revision'); 

    }

    public function getOpcionAutorizacionById($id)
    {   
         
        $opciones = OpcionAutorizacion::find($id);
      
        return $opciones;
    }

public function actualizar(OpcionAutorizacionRequest $request):RedirectResponse
    {
        $opciones= OpcionAutorizacion::find($request->id);
        
        $opciones->update($request->all());
        return redirect()->route('opcionAutorizacion.index')->with('success','opcion autorizacion actualizada');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $opciones=OpcionAutorizacion::find($request->borrado);
        $opciones->delete();
        return redirect()->route('opcionAutorizacion.index')->with('danger','opcion autorizacion eliminada');
    }
}
