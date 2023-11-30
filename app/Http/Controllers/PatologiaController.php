<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatologiaRequest;
use App\Models\Patologia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PatologiaController extends Controller
{
    public function index():View
    {
        $patologias=Patologia::all();
        return view('patologias.patologia', compact('patologias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('patologias.addpatologia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatologiaRequest $request):RedirectResponse
    {
        Patologia::create($request->all());
        return redirect()->route('patologias.index')->with('success','Patologia  añadida');
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
    public function edit(Patologia $patologia):View
    {
        return view('patologias.editpatologia', compact('patologia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatologiaRequest $request, Patologia $patologia):RedirectResponse
    {
       $patologia->update($request->all());
       return redirect()->route('patologias.index')->with('success','Actualizada Patología'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patologia $patologia)
    {
        $patologia->delete();
        return redirect()->route('patologias.index')->with('danger','Eliminado
        a patologia'); 

    }
}
