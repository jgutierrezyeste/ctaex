<?php

namespace App\Http\Controllers;

use App\Http\Requests\LetradoRequest;
use App\Models\Letrado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LetradoController extends Controller
{
    public function index():View
    {
        $letrados=Letrado::all();
        return view('letrados.letrado', compact('letrados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('letrados.addletrado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LetradoRequest $request):RedirectResponse
    {
        Letrado::create($request->all());
        return redirect()->route('letrados.index')->with('success','Letrado  añadido');
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
    public function edit(Letrado $letrado):View
    {
        return view('letrados.editletrado', compact('letrado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LetradoRequest $request, Letrado $letrado):RedirectResponse
    {
       $letrado->update($request->all());
       return redirect()->route('letrados.index')->with('success','Actualizado Letrado'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Letrado $letrado)
    {
        $letrado->delete();
        return redirect()->route('letrados.index')->with('danger','Eliminado Letrado'); 

    }

    
    public function getLetradoById($id)
    {   
       
        $letrado = Letrado::find($id);
        return $letrado;
    }

public function actualizar(LetradoRequest $request):RedirectResponse
    {
        $letrado=Letrado::find($request->id);
        
        $letrado->update($request->all());
        return redirect()->route('letrados.index')->with('success','letrado actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $letrado=Letrado::find($request->borrado);
        $letrado->delete();
        return redirect()->route('letrados.index')->with('danger','letrado eliminada');
    }
}
