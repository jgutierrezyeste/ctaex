<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModoResolucionRequest;
use App\Models\ModoResolucion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ModoResolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modosresoluciones=ModoResolucion::all();
        return view ('modosresoluciones.modoresolucion', compact ('modosresoluciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        
        return view ('modosresoluciones.addmodoresolucion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModoResolucionRequest $request):RedirectResponse
    {
        ModoResolucion::create([
            'nombre'=> $request->nombre    
        ]);
        return redirect()->route('resolucionmodos.index')->with('success','Modo resolucion nuevo añadido');
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
    public function edit(ModoResolucion $resolucionModo):View
    {
        return view ('modosresoluciones.editmodoresolucion',compact ('resolucionModo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModoResolucionRequest $request, ModoResolucion $resolucionModo):RedirectResponse
    {
        $resolucionModo->update($request->all());
        return redirect()->route('resolucionModos.index')->with('success','Modo Resolucion actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,ModoResolucion $resolucionModo):RedirectResponse
    {
        $resolucionModo->delete();
        return redirect()->route('resolucionModos.index')->with('danger','Modo resolucion eliminado');
    }

    
    public function getModoResolucionById($id)
    {       
        $modoresolucion = ModoResolucion::find($id);
       
        return $modoresolucion;
    }

public function actualizar(ModoResolucionRequest $request):RedirectResponse
    {

    
        $modoresolucion=ModoResolucion::find($request->id);
        
        $modoresolucion->update($request->all());
        return redirect()->route('resolucionModos.index')->with('success','modo resolucion  actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $modoresolucion=ModoResolucion::find($request->borrado);
        $modoresolucion->delete();
        return redirect()->route('resolucionModos.index')->with('danger','modo resolucion eliminada');
    }
}