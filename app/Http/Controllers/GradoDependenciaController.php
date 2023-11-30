<?php

namespace App\Http\Controllers;

use App\Http\Requests\GradoDependenciaRequest;
use App\Models\GradoDependencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GradoDependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $grados=GradoDependencia::all();
        return view('gradosdependencias.gradodependencia', compact('grados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('gradosdependencias.addgradodependencia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GradoDependenciaRequest $request):RedirectResponse
    {
        GradoDependencia::create($request->all());
        return redirect()->route('gradosDependencia.index')->with('success','Grado dependencia añadido');
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
    public function edit(GradoDependencia $gradosDependencium):View
    {
        return view('gradosdependencias.editgradodependencia', compact('gradosDependencium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GradoDependenciaRequest $request, GradoDependencia $gradosDependencium):RedirectResponse
    {
       $gradosDependencium->update($request->all());
       return redirect()->route('gradosDependencia.index')->with('success','Actualizado grado dependencia'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GradoDependencia $gradosDependencium)
    {
        $gradosDependencium->delete();
        return redirect()->route('gradosDependencia.index')->with('danger','Eliminado grado dependencia'); 

    }
}
