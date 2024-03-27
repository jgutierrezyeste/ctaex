<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoRegimenRequest;
use App\Models\TipoRegimen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TipoRegimenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiposregimen=TipoRegimen::all();
        return view ('tiposregimen.tiporegimen', compact ('tiposregimen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        
        return view ('tiposregimen.addtiporegimen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoRegimenRequest $request):RedirectResponse
    {
        TipoRegimen::create($request->all());
        return redirect()->route('tiposregimen.index')->with('success','Tipo regimen nuevo añadido');
        
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
    public function edit(TipoRegimen $tiposRegiman):View
    {
        return view ('tiposregimen.edittiporegimen',compact ('tiposRegiman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoRegimenRequest $request, TipoRegimen $tiposRegiman):RedirectResponse
    {
        $tiposRegiman->update($request->all());
        return redirect()->route('tiposRegimen.index')->with('success','Tipo Regimen actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,TipoRegimen $tiposRegiman):RedirectResponse
    {
        $tiposRegiman->delete();
        return redirect()->route('tiposRegimen.index')->with('danger','Tipo regimen eliminada');
    }
}