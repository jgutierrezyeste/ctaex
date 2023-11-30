<?php

namespace App\Http\Controllers;

use App\Http\Requests\FiguraRequest;
use App\Models\Figura;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FiguraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $figuras = Figura::all();
        return view('figuras.figura',compact('figuras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('figuras.addfigura');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FiguraRequest $request):RedirectResponse
    {
        Figura::create($request->all());
        return redirect()->route('figuras.index')->with ('success','Nueva Figura añadida');

       
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
    public function edit(Figura $figura):View
    {
        return view('figuras.editfigura', compact('figura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FiguraRequest $request, Figura $figura):RedirectResponse
    {
        $figura->update($request->all());
        return redirect()->route('figuras.index')->with('success','Documento identificativo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Figura $figura)
    {
        $figura->delete();
        return redirect()->route('figuras.index')->with ('danger','Figura eliminada');
    }
}
