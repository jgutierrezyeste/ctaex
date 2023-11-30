<?php

namespace App\Http\Controllers;

use App\Http\Requests\AreaEccaEmpleadoRequest;
use App\Models\AreaEccaEmpleado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AreaEccaEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $empleados=AreaEccaEmpleado::all();
        return view ('empleadosaecca.empleadoaecca', compact ('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('empleadosaecca.addempleadoaecca');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AreaEccaEmpleadoRequest $request):RedirectResponse
    {
        AreaEccaEmpleado::create([
            'empleado'=> $request->empleado,
             
        ]);
        return redirect()->route('empleadosAecca.index')->with('success','Empleado Aecca nuevo añadido');
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
    public function edit(AreaEccaEmpleado $empleadosAecca)
    {
        return view ('empleadosaecca.editempleadoaecca',compact ('empleadosAecca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AreaEccaEmpleadoRequest $request, AreaEccaEmpleado $empleadosAecca):RedirectResponse
    {
        $empleadosAecca->update($request->all());
        return redirect()->route('empleadosAecca.index')->with('success','Empleado Aecca actualizado');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AreaEccaEmpleado $empleadosAecca)
    {
        $empleadosAecca->delete();
        return redirect()->route('empleadosAecca.index');
    }
}
