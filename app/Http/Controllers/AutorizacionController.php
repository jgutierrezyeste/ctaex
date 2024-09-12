<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutorizacionRequest;
use Illuminate\Http\Request;
use App\Models\Autorizacion;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AutorizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autorizaciones=Autorizacion::all();
        return view ('autorizaciones.autorizacion', compact ('autorizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        
        return view ('autorizaciones.addautorizacion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutorizacionRequest $request):RedirectResponse
    {
        Autorizacion::create([
            'nombre'=> $request->nombre    
        ]);
        return redirect()->route('autorizacion.index')->with('success','Autorización nueva añadido');
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
    public function edit(Autorizacion $autorizacion):View
    {
        return view ('autorizaciones.editautorizacion',compact ('autorizacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutorizacionRequest $request, Autorizacion $autorizacion):RedirectResponse
    {
        $autorizacion->update($request->all());
        return redirect()->route('autorizacion.index')->with('success','Autorizacion actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Autorizacion $autorizacion):RedirectResponse
    {
        $autorizacion->delete();
        return redirect()->route('autorizacion.index')->with('danger','Autorizacion eliminada');
    }

    public function getAutorizacionById($id)
    {       
        $autorizacion = Autorizacion::find($id);
       
        return $autorizacion;
    }

public function actualizar(AutorizacionRequest $request):RedirectResponse
    {
        $autorizacion=Autorizacion::find($request->id);
        
        $autorizacion->update($request->all());
        return redirect()->route('autorizacion.index')->with('success','autorizacion actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $autorizacion=Autorizacion::find($request->borrado);
        $autorizacion->delete();
        return redirect()->route('autorizacioin.index')->with('danger','autorizacion eliminada');
    }
}
