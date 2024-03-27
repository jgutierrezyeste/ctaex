<?php

namespace App\Http\Controllers;

use App\Http\Requests\RepresentanteRequest;
use App\Models\Representante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $representantes=Representante::all();
        return view ('representantes.representante', compact ('representantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        
        return view ('representantes.addrepresentante');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RepresentanteRequest $request):RedirectResponse
    {
        Representante::create($request->all());
        return redirect()->route('representantes.index')->with('success','Representante nuevo añadido');
        
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
    public function edit(Representante $representante):View
    {
        return view ('representantes.editrepresentante',compact ('representante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RepresentanteRequest $request, Representante $representante):RedirectResponse
    {
        $representante->update($request->all());
        return redirect()->route('representantes.index')->with('success','Carpeta actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Representante $representante):RedirectResponse
    {
        $representante->delete();
        return redirect()->route('representantes.index')->with('danger','Representante eliminada');
    }
}