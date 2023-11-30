<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComparecenciaRequest;
use App\Models\Comparecencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComparecenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $comparecencias=Comparecencia::all();
        return view ('comparecencias.comparecencia',compact('comparecencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('comparecencias.addcomparecencia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComparecenciaRequest $request):RedirectResponse
    {
        Comparecencia::create($request->all());
        return redirect()->route('comparecencias.index')->with('success','Comparecencia nueva añadida');
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
    public function edit(Comparecencia $comparecencia):View
    {
       return view('comparecencias.editcomparecencia',compact ('comparecencia')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComparecenciaRequest $request, Comparecencia $comparecencia)
    {
        $comparecencia->update($request->all());
        return redirect()->route('comparecencias.index')->with('success','Comparecencia actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comparecencia $comparecencia)
    {
        $comparecencia->delete();
        return redirect()->route('comparecencias.index')->with ('danger','Comparecencia eliminada');
    }
}
