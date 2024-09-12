<?php

namespace App\Http\Controllers;

use App\Http\Requests\MotivoRequest;
use App\Models\Motivo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MotivoController extends Controller
{
    public function index():View
    {
        $motivos=Motivo::all();
        return view('motivos.motivo', compact('motivos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('motivos.addmotivo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MotivoRequest $request):RedirectResponse
    {
        Motivo::create($request->all());
        return redirect()->route('motivos.index')->with('success','Motivo  añadido');
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
    public function edit(Motivo $motivo):View
    {
        return view('motivos.editmotivo', compact('motivo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MotivoRequest $request, Motivo $motivo):RedirectResponse
    {
       $motivo->update($request->all());
       return redirect()->route('motivos.index')->with('success','Actualizado Motivo'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motivo $motivo)
    {
        $motivo->delete();
        return redirect()->route('motivos.index')->with('danger','Eliminado motivo'); 

    }

    public function getMotivoById($id)
    {       
        $motivo = Motivo::find($id);
       
        return $motivo;
    }

public function actualizar(MotivoRequest $request):RedirectResponse
    {
        $motivo=Motivo::find($request->id);
        
        $motivo->update($request->all());
        return redirect()->route('motivos.index')->with('success','motivo actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $motivo=Motivo::find($request->borrado);
        $motivo->delete();
        return redirect()->route('motivos.index')->with('danger','motivo eliminada');
    }

    
}
