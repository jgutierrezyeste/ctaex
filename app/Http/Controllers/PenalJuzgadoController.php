<?php

namespace App\Http\Controllers;

use App\Http\Requests\PenalJuzgadoRequest;
use App\Models\PenalJuzgado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PenalJuzgadoController extends Controller
{
    public function index():View
    {
        $juzgados=PenalJuzgado::all();
        return view('penaljuzgados.penaljuzgado', compact('juzgados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('penaljuzgados.addpenaljuzgado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PenalJuzgadoRequest $request):RedirectResponse
    {
        PenalJuzgado::create($request->all());
        return redirect()->route('juzgadoPenal.index')->with('success','Juzgado Penal añadido');
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
    public function edit(PenalJuzgado $juzgadoPenal):View
    {
        return view('penaljuzgados.editpenaljuzgado', compact('juzgadoPenal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PenalJuzgadoRequest $request, PenalJuzgado $juzgadoPenal):RedirectResponse
    {
       $juzgadoPenal->update($request->all());
       return redirect()->route('juzgadoPenal.index')->with('success','Actualizado Juzgado Penal'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenalJuzgado $juzgadoPenal)
    {
        $juzgadoPenal->delete();
        return redirect()->route('juzgadoPenal.index')->with('danger','Eliminado juzgado penal'); 

    }
}
