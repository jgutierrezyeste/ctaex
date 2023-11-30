<?php

namespace App\Http\Controllers;

use App\Http\Requests\NacionalidadRequest;
use App\Models\Nacionalidad;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NacionalidadController extends Controller
{
    public function index():View
    {
        $nacionalidades=Nacionalidad::all();
        return view('nacionalidades.nacionalidad', compact('nacionalidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('nacionalidades.addnacionalidad');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NacionalidadRequest $request):RedirectResponse
    {
        Nacionalidad::create($request->all());
        return redirect()->route('nacionalidades.index')->with('success','Nacionalidad  añadido');
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
    public function edit(Nacionalidad $nacionalidade):View
    {
        return view('nacionalidades.editnacionalidad', compact('nacionalidade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NacionalidadRequest $request, Nacionalidad $nacionalidade):RedirectResponse
    {
       $nacionalidade->update($request->all());
       return redirect()->route('nacionalidades.index')->with('success','Actualizado Nacionalidad'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nacionalidad $nacionalidade)
    {
        $nacionalidade->delete();
        return redirect()->route('nacionalidades.index')->with('danger','Eliminado nacionalidad'); 

    }
}
