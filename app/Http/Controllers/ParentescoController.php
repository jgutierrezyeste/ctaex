<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParentescoRequest;
use App\Models\Parentesco;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ParentescoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $parentescos=Parentesco::all();
        return view ('parentesco.parentesco', compact ('parentescos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('parentesco.addparentesco');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParentescoRequest $request):RedirectResponse
    {
        Parentesco::create([
            'parentesco'=> $request->parentesco
            
        ]);
        return redirect()->route('parentescos.index')->with('success','Parentesco nuevo añadido');
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
    public function edit(Parentesco $parentesco):View
    {
        return view ('parentesco.editparentesco',compact ('parentesco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParentescoRequest $request, Parentesco $parentesco):RedirectResponse
    {
        $parentesco->update($request->all());
        return redirect()->route('parentescos.index')->with('success','Parentesco actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Parentesco $parentesco):RedirectResponse
    {
        $parentesco->delete();
        return redirect()->route('parentescos.index')->with('danger','Parentesco eliminado');
    }
}
