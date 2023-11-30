<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpedienteRequest;
use App\Models\Expediente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExpedienteController extends Controller
{
    public function index():View
    {
        $expedientes=Expediente::all();
        return view('expedientes.expediente', compact('expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('expedientes.addexpediente');
    }

    public function consultar():View
    {
        $expedientes=Expediente::all();
        return view('expedientes.consultarexpediente', compact('expedientes'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store( ExpedienteRequest $request):RedirectResponse
    {
        Expediente::create($request->all());
        return redirect()->route('expediente.index')->with('success','Expediente dependencia añadida');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expediente $expediente)
    {
        return view('expedientes.consultarexpediente', compact('expediente'));
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expediente $expediente):View
    {
        return view('expedientes.editexpediente', compact('expediente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpedienteRequest $request, Expediente $expediente):RedirectResponse
    {
       $expediente->update($request->all());
       return redirect()->route('expedientes.index')->with('success','Actualizado Expediente'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expediente $expediente)
    {
        $expediente->delete();
        return redirect()->route('expediente.index')->with('danger','Eliminado expediente'); 

    }
}
