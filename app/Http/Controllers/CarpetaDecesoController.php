<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarpetaDecesoRequest;
use App\Models\CarpetaDeceso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CarpetaDecesoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carpetas=CarpetaDeceso::all();
        return view ('carpetasdecesos.carpetadeceso', compact ('carpetas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        
        return view ('carpetasdecesos.addcarpetadeceso');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarpetaDecesoRequest $request):RedirectResponse
    {
        CarpetaDeceso::create([
            'nombre'=> $request->nombre    
        ]);
        return redirect()->route('carpetas.index')->with('success','Carpeta nueva añadida');
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
    public function edit(CarpetaDeceso $carpeta):View
    {
        return view ('carpetasdecesos.editcarpetadeceso',compact ('carpeta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarpetaDecesoRequest $request, CarpetaDeceso $carpeta):RedirectResponse
    {
        $carpeta->update($request->all());
        return redirect()->route('carpetas.index')->with('success','Carpeta actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,CarpetaDeceso $carpeta):RedirectResponse
    {
        $carpeta->delete();
        return redirect()->route('carpetas.index')->with('danger','Carpeta eliminada');
    }

    public function getCarpetaDecesoById($id)
    {   
         
        $carpeta = CarpetaDeceso::find($id);
      
        return $carpeta;
    }

public function actualizar(CarpetaDecesoRequest $request):RedirectResponse
    {
       
        $carpeta= CarpetaDeceso::find($request->id);
        
        $carpeta->update($request->all());
        return redirect()->route('carpetas.index')->with('success','carpetas actualizada');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $carpeta=CarpetaDeceso::find($request->borrado);
        $carpeta->delete();
        return redirect()->route('carpetas.index')->with('danger','carpeta eliminada');
    }
}
