<?php

namespace App\Http\Controllers;

use App\Http\Requests\JuzgadoRequest;
use App\Models\Juzgado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JuzgadoController extends Controller
{
    public function index():View
    {
        $juzgados=Juzgado::all();
        return view('juzgados.juzgado', compact('juzgados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('juzgados.addjuzgado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JuzgadoRequest $request):RedirectResponse
    {
        Juzgado::create($request->all());
        return redirect()->route('juzgados.index')->with('success','Juzgado  añadido');
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
    public function edit(Juzgado $juzgado):View
    {
        return view('juzgados.editjuzgado', compact('juzgado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JuzgadoRequest $request, Juzgado $juzgado):RedirectResponse
    {
       $juzgado->update($request->all());
       return redirect()->route('juzgados.index')->with('success','Actualizado Juzgado'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juzgado $juzgado)
    {
        $juzgado->delete();
        return redirect()->route('juzgados.index')->with('danger','Eliminado Juzgado'); 

    
    }
}
