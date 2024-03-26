<?php

namespace App\Http\Controllers;

use App\Http\Requests\CentroRequest;
use App\Models\Centro;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $centros=Centro::all();
        return view ('centros.centro', compact('centros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():VIew
    {
        return view ('centros.addcentro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CentroRequest $request): RedirectResponse
    {
        /*Centro::create([
            'nombre'=> $request->nombre_centro,
            'tipo_via_id'=> $request->tipo_via_id,
            'direccion'=> $request->direccion,
            'numero'=>$request->numero,
            'planta'=> $request->planta, 
            'letra'=> $request->letra,
            'poblacion'=> $request->poblacion,
            'provincia'=> $request->provincia,
            'codigo_postal'=> $request->codigo_postal,
            'telefono'=> $request->telefono,
            'telefono2'=> $request->telefono2,
            'fax'=> $request->fax,
            'fax2'=> $request->fax2,
            'correo_electronico'=> $request->correo_electronico,
            'observaciones'=> $request->observaciones
        ]);*/
        Centro::create($request->all());
        return redirect()->route('centros.index')->with('success','Centro nuevo añadido');
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
    public function edit(Centro $centro):View
    {
        return view ('centros.editcentro',compact ('centro'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CentroRequest $request, Centro $centro):RedirectResponse
    {
        $centro->update($request->all());
        return redirect()->route('centros.index')->with('success','Centro actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centro $centro)
    {
        $centro->delete();
        return redirect()->route('centros.index')->with('danger','Centro eliminado');
    }
}
