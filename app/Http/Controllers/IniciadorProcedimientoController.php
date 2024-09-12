<?php

namespace App\Http\Controllers;

use App\Http\Requests\IniciadorProcedimientoRequest;
use App\Models\IniciadorProcedimiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IniciadorProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $iniciadores=IniciadorProcedimiento::all();
        return view('iniciadoresprocedimientos.iniciadorprocedimiento', compact('iniciadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('iniciadoresprocedimientos.addiniciadorprocedimiento');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IniciadorProcedimientoRequest $request):RedirectResponse
    {
        IniciadorProcedimiento::create($request->all());
        return redirect()->route('iniciadorProcedimiento.index')->with('success','Iniciador procedimiento añadido');
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
    public function edit(IniciadorProcedimiento $iniciadorProcedimiento):View
    {
        return view('iniciadoresprocedimientos.editiniciadorprocedimiento', compact('iniciadorProcedimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IniciadorProcedimientoRequest $request, IniciadorProcedimiento $iniciadorProcedimiento):RedirectResponse
    {
       $iniciadorProcedimiento->update($request->all());
       return redirect()->route('iniciadorProcedimiento.index')->with('success','Actualizado Iniciador procedimiento'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IniciadorProcedimiento $iniciadorProcedimiento)
    {
        $iniciadorProcedimiento->delete();
        return redirect()->route('iniciadorProcedimiento.index')->with('danger','Eliminado Iniciador procedimiento'); 

    }

    public function getIniciadorProcedimientoById($id)
    {       
        $iniciadorProcedimiento = IniciadorProcedimiento::find($id);
       
        return $iniciadorProcedimiento;
    }

public function actualizar(IniciadorProcedimientoRequest $request):RedirectResponse
    {

    
        $iniciadorProcedimiento=IniciadorProcedimiento::find($request->id);
        
        $iniciadorProcedimiento->update($request->all());
        return redirect()->route('iniciadorProcedimiento.index')->with('success','iniciador  actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $iniciadorProcedimiento=IniciadorProcedimiento::find($request->borrado);
        $iniciadorProcedimiento->delete();
        return redirect()->route('iniciadorProcedimiento.index')->with('danger','iniciador procedimiento eliminada');
    }
}
