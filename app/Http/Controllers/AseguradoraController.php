<?php

namespace App\Http\Controllers;

use App\Http\Requests\AseguradoraRequest;
use App\Models\Aseguradora;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AseguradoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aseguradoras=Aseguradora::all();
        return view ('aseguradora.aseguradoraplantilla', compact ('aseguradoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
       
        return view ('aseguradora.addaseguradora');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AseguradoraRequest $request):RedirectResponse
    {
        Aseguradora::create([
            'nombre'=> $request->nombre,
            'telefono_avisos'=>$request->telefono_avisos,
            'telefono_avisos2'=>$request->telefono_avisos2    
        ]);
        return redirect()->route('aseguradoras.index')->with('success','Aseguradora nueva añadido');
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
    public function edit(Aseguradora $aseguradora):View
    {
        return view ('aseguradora.editaseguradora',compact ('aseguradora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AseguradoraRequest $request, Aseguradora $aseguradora):RedirectResponse
    {
        $aseguradora->update($request->all());
        return redirect()->route('aseguradoras.index')->with('success','Aseguradora actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Aseguradora $aseguradora):RedirectResponse
    {
        $aseguradora->delete();
        return redirect()->route('aseguradoras.index')->with('danger','Aseguradora eliminada');
    }
}