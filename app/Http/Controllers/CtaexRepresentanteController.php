<?php

namespace App\Http\Controllers;

use App\Http\Requests\CtaexRepresentanteRequest;
use App\Models\CtaexRepresentante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CtaexRepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $representantes=CtaexRepresentante::all();
        return view('ctaexrepresentantes.ctaexrepresentante', compact('representantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('ctaexrepresentantes.addctaexrepresentante');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CtaexRepresentanteRequest $request):RedirectResponse
    {
        CtaexRepresentante::Create($request->all());
        return redirect()->route('representantesCtaex.index')->with('success','Representante nuevo añadido');
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
    public function edit(CtaexRepresentante $representantesCtaex):View
    {
        return view('ctaexrepresentantes.editctaexrepresentante', compact('representantesCtaex'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CtaexRepresentanteRequest $request, CtaexRepresentante $representantesCtaex)
    {
        $representantesCtaex->update($request->all());
        return redirect()->route('representantesCtaex.index')->with('success','Representante actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CtaexRepresentante $representantesCtaex)
    {
        $representantesCtaex->delete();
        return redirect()->route('representantesCtaex.index')->with('danger','Representante eliminado');
    }
}
