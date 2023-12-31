<?php

namespace App\Http\Controllers;

use App\Http\Requests\AñoRequest;
use App\Models\Año;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AñoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $años=Año::all();
        return view ('año.año', compact ('años'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('año.addaño');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AñoRequest $request)
    {
        Año::create([
            'año'=> $request->año
            
        ]);
        return redirect()->route('años.index')->with('success','Añp nuevo añadido');
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
    public function edit(Año $año):View
    {
        return view ('año.editaño',compact ('año'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AñoRequest $request, Año $año):RedirectResponse
    {
        $año->update($request->all());
        return redirect()->route('años.index')->with('success','Año actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Año $año):RedirectResponse
    {
        $año->delete();
        return redirect()->route('años.index')->with('danger','Año eliminado');
    }
}
