<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatologiaGeneralRequest;
use App\Models\PatologiaGeneral;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PatologiaGeneralController extends Controller
{
    public function index():View
    {
        $patologias=PatologiaGeneral::all();
        return view('patologiasgenerales.patologiageneral', compact('patologias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('patologiasgeneRales.addpatologiageneral');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatologiaGeneralRequest $request):RedirectResponse
    {
        PatologiaGeneral::create($request->all());
        return redirect()->route('patologiasGenerales.index')->with('success','Patología General añadida');
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
    public function edit(PatologiaGeneral $patologiasGenerale):View
    {
        return view('patologiasgenerales.editpatologiageneral', compact('patologiasGenerale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatologiaGeneralRequest $request, PatologiaGeneral $patologiasGenerale):RedirectResponse
    {
       $patologiasGenerale->update($request->all());
       return redirect()->route('patologiasGenerales.index')->with('success','Actualizada opcion de Revisión'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PatologiaGeneral $patologiasGenerale)
    {
        $patologiasGenerale->delete();
        return redirect()->route('patologiasGenerales.index')->with('danger','Eliminada patología general'); 

    }

    public function getPatologiaGeneralById($id)
    {   
         
        $patologia = PatologiaGeneral::find($id);
      
        return $patologia;
    }

public function actualizar(PatologiaGeneralRequest $request):RedirectResponse
    {
        $patologia= PatologiaGeneral::find($request->id);
        
        $patologia->update($request->all());
        return redirect()->route('patologiasGenerales.index')->with('success','patologia general actualizada');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $patologia=PatologiaGeneral::find($request->borrado);
        $patologia->delete();
        return redirect()->route('patologiasGenerales.index')->with('danger','patologia general eliminada');
    }
}
