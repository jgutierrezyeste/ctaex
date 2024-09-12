<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcedimientoJudicialRequest;
use App\Models\ProcedimientoJudicial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProcedimientoJudicialController extends Controller
{
    public function index():View
    {
        $procedimientos=ProcedimientoJudicial::all();
        return view('procedimientosjudiciales.procedimientojudicial', compact('procedimientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('procedimientosjudiciales.addprocedimientojudicial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProcedimientoJudicialRequest $request):RedirectResponse
    {
        ProcedimientoJudicial::create($request->all());
        return redirect()->route('procedimientosJudiciales.index')->with('success','Procedimiento Judicial añadido');
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
    public function edit(ProcedimientoJudicial $procedimientosJudiciale):View
    {
        return view('procedimientosjudiciales.editprocedimientojudicial', compact('procedimientosJudiciale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProcedimientoJudicialRequest $request, ProcedimientoJudicial $procedimientosJudiciale):RedirectResponse
    {
       $procedimientosJudiciale->update($request->all());
       return redirect()->route('procedimientosJudiciales.index')->with('success','Actualizado procedimiento judicial'); 
    }

    public function actualizar(ProcedimientoJudicialRequest $request):RedirectResponse
    {
        
        /*$procedimientosJudiciale=ProcedimientoJudicial::find($request->id);
        fwrite($archivo,print_r($procedimientosJudiciale,true));
       //return view('procedimientosjudiciales.editprocedimientojudicial', compact('procedimientosJudiciale'));
        $relacion->update($request->all());
        //return redirect()->route('procedimientosJudiciales.index')->with('success','Actualizado procedimiento judicial');*/
        $procedimiento=ProcedimientoJudicial::find($request->id);
        
        $procedimiento->update($request->all());
        return redirect()->route('procedimientosJudiciales.index')->with('success','procedimiento actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProcedimientoJudicial $procedimientosJudiciale)
    {
        $procedimientosJudiciale->delete();
        return redirect()->route('procedimientosJudiciales.index')->with('danger','Eliminado procedimiento judicial'); 

    }

    public function getProcedimientoById($id)
        {
            
            $procedimientos = ProcedimientoJudicial::find($id);
            
            return $procedimientos;
        }

        public function eliminar(Request $request):RedirectResponse
        {
            $procedimiento=ProcedimientoJudicial::find($request->borrado);
            $procedimiento->delete();
            return redirect()->route('procedimientosJudiciales.index')->with('danger','procedimiento judicial eliminada');
        }
}
