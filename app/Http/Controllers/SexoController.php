<?php

namespace App\Http\Controllers;

use App\Http\Requests\SexoRequest;
use App\Models\Sexo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SexoController extends Controller
{
    public function index():View
    {
        $sexos=Sexo::all();
        return view('sexos.sexo', compact('sexos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('sexos.addsexo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SexoRequest $request):RedirectResponse
    {
        Sexo::create($request->all());
        return redirect()->route('sexo.index')->with('success','Sexo añadido');
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
    public function edit(Sexo $sexo):View
    {
        return view('sexos.editsexo', compact('sexo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SexoRequest $request, Sexo $sexo):RedirectResponse
    {
       $sexo->update($request->all());
       return redirect()->route('sexo.index')->with('success','Actualizado sexo'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sexo $sexo)
    {
        $sexo->delete();
        return redirect()->route('sexo.index')->with('danger','Eliminado sexo'); 

    }
}
