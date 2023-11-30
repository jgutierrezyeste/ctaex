<?php

namespace App\Http\Controllers;

use App\Http\Requests\PuestoRequest;
use App\Models\Puesto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PuestoController extends Controller
{
    public function index():View
    {
        $puestos=Puesto::all();
        return view('puestos.puesto', compact('puestos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('puestos.addpuesto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PuestoRequest $request):RedirectResponse
    {
        Puesto::create($request->all());
        return redirect()->route('puestos.index')->with('success','Puesto  añadida');
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
    public function edit(Puesto $puesto):View
    {
        return view('puestos.editpuesto', compact('puesto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PuestoRequest $request, Puesto $puesto):RedirectResponse
    {
       $puesto->update($request->all());
       return redirect()->route('puestos.index')->with('success','Actualizado puesto'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puesto $puesto)
    {
        $puesto->delete();
        return redirect()->route('puestos.index')->with('danger','Eliminado puesto'); 

    }
}
