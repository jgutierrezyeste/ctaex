<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoViaRequest;
use App\Models\TipoVia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TipoViaController extends Controller
{
    public function index():View
    {
        $vias=TipoVia::all();
        return view('tiposvias.tipovia', compact('vias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('tiposvias.addtipovia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoViaRequest $request):RedirectResponse
    {
        TipoVia::create($request->all());
        return redirect()->route('tiposVia.index')->with('success','Tipo de via añadida');
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
    public function edit(TipoVia $tiposVium):View
    {
        return view('tiposvias.edittipovia', compact('tiposVium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoViaRequest $request, TipoVia $tiposVium):RedirectResponse
    {
       $tiposVium->update($request->all());
       return redirect()->route('tiposVia.index')->with('success','Actualizada Tipo Vía'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoVia $tiposVium)
    {
        $tiposVium->delete();
        return redirect()->route('tiposVia.index')->with('danger','Eliminada tipo vía'); 

    }

}
