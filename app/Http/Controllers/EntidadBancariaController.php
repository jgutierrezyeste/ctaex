<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntidadBancariaRequest;
use App\Models\EntidadBancaria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EntidadBancariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $entidadesbancarias=EntidadBancaria::all();
        return view ('entidadbancaria.entidadbancaria', compact ('entidadesbancarias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('entidadbancaria.addentidadbancaria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntidadBancariaRequest $request):RedirectResponse
    {
        EntidadBancaria::create([
            'entidad'=> $request->entidad
            
        ]);
        return redirect()->route('entidadesbancarias.index')->with('success','Entidad bancaria nueva añadido');
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
    public function edit(EntidadBancaria $entidadesbancaria) :View
    {
        return view ('entidadbancaria.editentidadbancaria',compact ('entidadesbancaria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EntidadBancariaRequest $request, EntidadBancaria $entidadesbancaria):RedirectResponse
    {
        $entidadesbancaria->update($request->all());
        return redirect()->route('entidadesbancarias.index')->with('success','Entidad Bancaria actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    

    public function destroy(Request $request,EntidadBancaria $entidadesbancaria):RedirectResponse
    {
        $entidadesbancaria->delete();
        return redirect()->route('entidadesbancarias.index');
    }


    public function getEntidadBancariaById($id)
        { $archivo=fopen("getentidadbancaria.txt","w+");
           
            $entidad = EntidadBancaria::find($id);
           
            return $entidad;
        }

    public function actualizar(EntidadBancariaRequest $request):RedirectResponse
        {

        
            $entidad=EntidadBancaria::find($request->id);
            
            $entidad->update($request->all());
            return redirect()->route('entidadesbancarias.index')->with('success','entidad bancaria actualizado');
        }

        public function eliminar(Request $request):RedirectResponse
        {
            $entidad=EntidadBancaria::find($request->borrado);
            $entidad->delete();
            return redirect()->route('entidadesbancarias.index')->with('danger','entidad bancaria eliminada');
        }
}