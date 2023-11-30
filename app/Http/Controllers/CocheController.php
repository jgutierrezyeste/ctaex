<?php

namespace App\Http\Controllers;

use App\Http\Requests\CocheRequest;
use App\Models\Coche;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $coches=Coche::all();
        return view('coches.coche', compact('coches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('coches.addcoche');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CocheRequest $request):RedirectResponse
    {
        Coche::create($request->all());
        return redirect()->route('coches.index')->with('success','Coche nuevo añadido');
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
    public function edit(Coche $coch):View
    {
        return view ('coches.editcoche',compact ('coch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CocheRequest $request, Coche $coch)
    {
        $coch->update($request->all());
        return redirect()->route('coches.index')->with('success','Coche actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coche $coch)
    {
        $coch->delete();
        return redirect()->route('coches.index')->with('danger','Coche eliminada');
    }
}
