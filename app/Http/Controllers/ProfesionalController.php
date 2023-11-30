<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfesionalRequest;
use App\Models\Profesional;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfesionalController extends Controller
{
    public function index():View
    {
        $profesionales=Profesional::all();
        return view('profesionales.profesional', compact('profesionales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('profesionales.addprofesional');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfesionalRequest $request):RedirectResponse
    {
        Profesional::create($request->all());
        return redirect()->route('profesionales.index')->with('success','Profesional  añadido');
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
    public function edit(Profesional $profesionale):View
    {
        return view('profesionales.editprofesional', compact('profesionale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfesionalRequest $request, Profesional $profesionale):RedirectResponse
    {
       $profesionale->update($request->all());
       return redirect()->route('profesionales.index')->with('success','Actualizado Profesional'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesional $profesionale)
    {
        $profesionale->delete();
        return redirect()->route('profesionales.index')->with('danger','Eliminado profesional'); 

    }
    
}
