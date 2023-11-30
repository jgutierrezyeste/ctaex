<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegimenRequest;
use App\Models\Regimen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegimenController extends Controller
{
    public function index():View
    {
        $regimenes=Regimen::all();
        return view('regimnes.regimen', compact('regimenes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('regimenes.addregimen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegimenRequest $request):RedirectResponse
    {
        Regimen::create($request->all());
        return redirect()->route('regimenes.index')->with('success','Régimen  añadida');
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
    public function edit(Regimen $regimene):View
    {
        return view('regimenes.editregimen', compact('regimene'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegimenRequest $request, Regimen $regimene):RedirectResponse
    {
       $regimene->update($request->all());
       return redirect()->route('regimenes.index')->with('success','Actualizado régimen'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Regimen $regimene)
    {
        $regimene->delete();
        return redirect()->route('regimenes.index')->with('danger','Eliminado régimen'); 

    }

}
