<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvinciaRequest;
use App\Models\Provincia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProvinciaController extends Controller
{
    public function index():View
    {
        $provincias=Provincia::all();
        return view('provincias.provincia', compact('provincias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('provincias.addprovincia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProvinciaRequest $request):RedirectResponse
    {
        Provincia::create($request->all());
        return redirect()->route('provincias.index')->with('success','Provincia  añadida');
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
    public function edit(Provincia $provincia):View
    {
        return view('provincias.editprovincia', compact('provincia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProvinciaRequest $request, Provincia $provincia):RedirectResponse
    {
       $provincia->update($request->all());
       return redirect()->route('provincias.index')->with('success','Actualizada provincia'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provincia $provincia)
    {
        $provincia->delete();
        return redirect()->route('provincias.index')->with('danger','Eliminada provincia'); 

    }
    
}
