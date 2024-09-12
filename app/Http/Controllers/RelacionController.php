<?php

namespace App\Http\Controllers;

use App\Http\Requests\RelacionRequest;
use App\Models\Relacion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RelacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $relaciones=Relacion::all();
        return view ('relaciones.relacion', compact ('relaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('relaciones.addrelacion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RelacionRequest $request):RedirectResponse
    {
        Relacion::create([
            'nombre'=> $request->nombre
            
        ]);
        return redirect()->route('relaciones.index')->with('success','Relacion nueva añadida');
    }


    public function enviarSelected(RelacionRequest $request){
        $relacione=$request->all();
        $archivo=fopen("seleccionado.txt","w+");
        fwrite($archivo,print_r($relacione,true));
        return view('relaciones.editrelacion',compact('relacione'));

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
    public function edit(Relacion $relacione):View
    {
        return view ('relaciones.editrelacion',compact ('relacione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RelacionRequest $request):RedirectResponse
    {
        $archivo=fopen("actualizar.txt","w+");
        fwrite($archivo,print_r($request->all(),true));
        //$relacione->update($request->all());
        return redirect()->route('relaciones.index')->with('success','Relacion actualizada');
    }

    public function actualizar(RelacionRequest $request):RedirectResponse
    {
        $archivo=fopen("actualizar.txt","w+");
        fwrite($archivo,print_r($request->all(),true));
        $relacion=Relacion::find($request->id);
        fwrite($archivo, print_r($relacion,true));
        $relacion->update($request->all());
        return redirect()->route('relaciones.index')->with('success','Relacion actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Relacion $relacione):RedirectResponse
    {
        $relacione->delete();
        return redirect()->route('relaciones.index')->with('danger','Relacion eliminada');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $relacion=Relacion::find($request->borrado);
        $relacion->delete();
        return redirect()->route('relaciones.index')->with('danger','Relacion eliminada');
    }
    /*public function eliminar($id):RedirectResponse
    {
        $archivo=fopen("eliminar.txt","w+");
        $relacion=Relacion::find($id);
        fwrite($archivo,print_r($relacion,true));

        $relacion->delete();
        return redirect()->route('relaciones.index')->with('danger','Relacion eliminada');
    }*/

    public function getRelacionById($id)
        {
           
            $relacion = Relacion::find($id);
            
            return $relacion;
        }

        
}
