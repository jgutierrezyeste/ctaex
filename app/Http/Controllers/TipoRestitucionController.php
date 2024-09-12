<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoRestitucionRequest;
use App\Models\TipoRestitucion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TipoRestitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiposrestitucion=TipoRestitucion::all();
        return view ('tiposrestitucion.tiporestitucion', compact ('tiposrestitucion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        
        return view ('tiposrestitucion.addtiporestitucion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoRestitucionRequest $request):RedirectResponse
    {
        TipoRestitucion::create($request->all());
        return redirect()->route('tiposrestitucion.index')->with('success','Tipo restitucion nuevo añadido');
        
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
    public function edit(TipoRestitucion $tiposRestitucion):View
    {
        return view ('tiposrestitucion.edittiporestitucion',compact ('tiposRestitucion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoRestitucionRequest $request, TipoRestitucion $tiposRestitucion):RedirectResponse
    {
        $tiposRestitucion->update($request->all());
        return redirect()->route('tiposRestitucion.index')->with('success','Tipo Restitucion actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,TipoRestitucion $tiposRestitucion):RedirectResponse
    {
        $tiposRestitucion->delete();
        return redirect()->route('tiposRestitucion.index')->with('danger','Tipo restitucion eliminada');
    }

    
    public function getTipoRestitucionById($id)
    {       
        $tipoRestitucion = TipoRestitucion::find($id);
       
        return $tipoRestitucion;
    }

public function actualizar(TipoRestitucionRequest $request):RedirectResponse
    {

    
        $tipoRestitucion=TipoRestitucion::find($request->id);
        
        $tipoRestitucion->update($request->all());
        return redirect()->route('tiposRestitucion.index')->with('success','tipo restitucion  actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $tipoRestitucion=TipoRestitucion::find($request->borrado);
        $tipoRestitucion->delete();
        return redirect()->route('tiposRestitucion.index')->with('danger','tipo restitucion eliminada');
    }
}