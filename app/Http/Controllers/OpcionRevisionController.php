<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpcionRevisionRequest;
use App\Models\OpcionRevision;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OpcionRevisionController extends Controller
{
    public function index():View
    {
        $opciones=OpcionRevision::all();
        return view('opcionesrevision.opcionrevision', compact('opciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('opcionesrevision.addopcionrevision');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OpcionRevisionRequest $request):RedirectResponse
    {
        OpcionRevision::create($request->all());
        return redirect()->route('opcionRevision.index')->with('success','Opción revisión añadida');
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
    public function edit(OpcionRevision $opcionRevision):View
    {
        return view('opcionesrevision.editopcionrevision', compact('opcionRevision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OpcionRevisionRequest $request, OpcionRevision $opcionRevision):RedirectResponse
    {
       $opcionRevision->update($request->all());
       return redirect()->route('opcionRevision.index')->with('success','Actualizada opcion de Revisión'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OpcionRevision $opcionRevision)
    {
        $opcionRevision->delete();
        return redirect()->route('opcionRevision.index')->with('danger','Eliminada opcion de revision'); 

    }
}
