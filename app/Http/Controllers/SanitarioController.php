<?php

namespace App\Http\Controllers;

use App\Http\Requests\SanitarioRequest;
use App\Models\Sanitario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SanitarioController extends Controller
{
    public function index():View
    {
        $sanitarios=Sanitario::all();
        return view('sanitarios.sanitario', compact('sanitarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('sanitarios.addsanitario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SanitarioRequest $request):RedirectResponse
    {
        Sanitario::create($request->all());
        return redirect()->route('sanitarios.index')->with('success','Regimen Sanitario  añadido');
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
    public function edit(Sanitario $sanitario):View
    {
        return view('sanitarios.editsanitario', compact('sanitario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SanitarioRequest $request, Sanitario $sanitario):RedirectResponse
    {
       $sanitario->update($request->all());
       return redirect()->route('sanitarios.index')->with('success','Actualizado regimen sanitario'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sanitario $sanitario)
    {
        $sanitario->delete();
        return redirect()->route('sanitarios.index')->with('danger','Eliminado regimen sanitario'); 

    }
}
