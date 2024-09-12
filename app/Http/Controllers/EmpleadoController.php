<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpleadoRequest;
use App\Models\Empleado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $empleados=Empleado::all();
        return view ('empleados.empleado', compact ('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('empleados.addempleado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmpleadoRequest $request):RedirectResponse
    {
        Empleado::create($request->all());
        return redirect()->route('empleados.index')->with('success','Empleado nuevo añadido');
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
    public function edit(Empleado $empleado)
    {
        return view ('empleados.editempleado',compact ('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmpleadoRequest $request, Empleado $empleado):RedirectResponse
    {
        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success','Empleado actualizado');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }

    public function getEmpleadoById($id)
    {       
        $empleado = Empleado::find($id);
       
        return $empleado;
    }

public function actualizar(EmpleadoRequest $request):RedirectResponse
    {
        $empleado=Empleado::find($request->id);
        
        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success','empleado  actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $empleado=Empleado::find($request->borrado);
        $empleado->delete();
        return redirect()->route('empleados.index')->with('danger','empleado eliminada');
    }
}
