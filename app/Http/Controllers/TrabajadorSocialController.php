<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrabajadorSocialRequest;
use App\Models\TrabajadorSocial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TrabajadorSocialController extends Controller
{
    public function index():View
    {
        $trabajadores=TrabajadorSocial::all();
        return view('trabajadoressociales.trabajadorsocial', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('trabajadoressociales.addtrabajadorsocial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TrabajadorSocialRequest $request):RedirectResponse
    {
        TrabajadorSocial::create($request->all());
        return redirect()->route('trabajadoresSociales.index')->with('success','Trabajador Social añadido');
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
    public function edit(TrabajadorSocial $trabajadoresSociale):View
    {
        return view('trabajadoressociales.edittrabajadorsocial', compact('trabajadoresSociale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TrabajadorSocialRequest $request, TrabajadorSocial $trabajadoresSociale):RedirectResponse
    {
       $trabajadoresSociale->update($request->all());
       return redirect()->route('trabajadoresSociales.index')->with('success','Actualizado Trabajador Social'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrabajadorSocial $trabajadoresSociale)
    {
        $trabajadoresSociale->delete();
        return redirect()->route('trabajadoresSociales.index')->with('danger','Eliminado trabajador social'); 

    }
}
