<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeguroMedicoRequest;
use App\Models\SeguroMedico;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SeguroMedicoController extends Controller
{
    public function index():View
    {
        $seguros=SeguroMedico::all();
        return view('segurosmedicos.seguromedico', compact('seguros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('segurosmedicos.addseguromedico');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SeguroMedicoRequest $request):RedirectResponse
    {
        SeguroMedico::create($request->all());
        return redirect()->route('segurosMedicos.index')->with('success','Seguro médico añadido');
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
    public function edit(SeguroMedico $segurosMedico):View
    {
        return view('segurosmedicos.editseguromedico', compact('segurosMedico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SeguroMedicoRequest $request, SeguroMedico $segurosMedico):RedirectResponse
    {
       $segurosMedico->update($request->all());
       return redirect()->route('segurosMedicos.index')->with('success','Actualizado seguro médico'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeguroMedico $segurosMedico)
    {
        $segurosMedico->delete();
        return redirect()->route('segurosMedicos.index')->with('danger','Eliminado seguro médico'); 

    }
}
