<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoRendicionAnualRequest;
use App\Models\TipoRendicionAnual;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TipoRendicionAnualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiposrendicionanual=TipoRendicionAnual::all();
        return view ('tiposrendicionesanuales.tiporendicionanual', compact ('tiposrendicionanual'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        
        return view ('tiposrendicionesanuales.addtiporendicionanual');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoRendicionAnualRequest $request):RedirectResponse
    {
        TipoRendicionAnual::create($request->all());
        return redirect()->route('tipoRendicionAnual.index')->with('success','Tipo rendicion anual nuevo añadido');
        
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
    public function edit(TipoRendicionAnual $tiposRendicionAnual):View
    {
        return view ('tiposrendicionesanuales.edittiporendicionanual',compact ('tiposRendicionAnual'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoRendicionAnualRequest $request, TipoRendicionAnual $tiposRendicionAnual):RedirectResponse
    {
        $tiposRendicionAnual->update($request->all());
        return redirect()->route('tiposRendicionAnual.index')->with('success','Tipo Rendicion Anual actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,TipoRendicionAnual $tiposRendicionAnual):RedirectResponse
    {
        $tiposRendicionAnual->delete();
        return redirect()->route('tiposRendicionAnual.index')->with('danger','Tipo restitucion eliminada');
    }

    public function getTipoRendicionAnualById($id)
    {       
        $tiporendicion = TipoRendicionAnual::find($id);
       
        return $tiporendicion;
    }

public function actualizar(TipoRendicionAnualRequest $request):RedirectResponse
    {
        $tiporendicion=TipoRendicionAnual::find($request->id);
        
        $tiporendicion->update($request->all());
        return redirect()->route('tiposRendicionAnual.index')->with('success','tipo rendicion  actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $tiporendicion=TipoRendicionAnual::find($request->borrado);
        $tiporendicion->delete();
        return redirect()->route('tiposRedicionAnual.index')->with('danger','tipo rendicion eliminada');
    }

}
