<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatologiaConcretaRequest;

use App\Models\PatologiaConcreta;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PatologiaConcretaController extends Controller
{
    public function index():View
    {
        $patologias=PatologiaConcreta::all();
        return view('patologiasconcretas.patologiaconcreta', compact('patologias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('patologiasconcretas.addpatologiaconcreta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatologiaConcretaRequest $request):RedirectResponse
    {
        PatologiaConcreta::create($request->all());
        return redirect()->route('patologiasConcretas.index')->with('success','Patologia  añadida');
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
    public function edit(PatologiaConcreta $patologiasConcreta):View
    {
        return view('patologiasconcretas.editpatologiaconcreta', compact('patologiasConcreta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatologiaConcretaRequest $request, PatologiaConcreta $patologiasConcreta):RedirectResponse
    {
       $patologiasConcreta->update($request->all());
       return redirect()->route('patologiasConcretas.index')->with('success','Actualizada Patología'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PatologiaConcreta $patologiasConcreta)
    {
        $patologiasConcreta->delete();
        return redirect()->route('patologiasConcretas.index')->with('danger','Eliminado
        a patologia'); 

    }
}
