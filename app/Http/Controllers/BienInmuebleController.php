<?php

namespace App\Http\Controllers;

use App\Http\Requests\BienInmuebleRequest;
use App\Models\BienInmueble;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BienInmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $inmueble=BienInmueble::all();
        return view ('bieninmueble.bieninmueble', compact ('inmueble'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('bieninmueble.addbieninmueble');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BienInmuebleRequest $request):RedirectResponse    {
        BienInmueble::create([
            
            
        ]);
        return redirect()->route('bienesinmuebles.index')->with('success','Bien inmueble nuevo añadido');
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
    public function edit(BienInmueble $bienInmueble) :View
    {
        return view ('bieninmueble.editbieninmueble',compact ('bieninmueble'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BienInmuebleRequest $request, BienInmueble $bienInmueble):RedirectResponse
    {
        $bienInmueble->update($request->all());
        return redirect()->route('bienesinmuebles.index')->with('success','Bien inmueble actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    

    public function destroy(Request $request,BienInmueble $bienesInmuebles):RedirectResponse
    {
        $bienesInmuebles->delete();
        return redirect()->route('bienesinmuebles.index');
    }


    public function getBienInmuebleById($id)
        { $archivo=fopen("getbieninmueble.txt","w+");
           
            $inmueble = BienInmueble::find($id);
           
            return $inmueble;
        }

    public function actualizar(BienInmuebleRequest $request):RedirectResponse
        {

        
            $inmueble=BienInmueble::find($request->id);
            
            $inmueble->update($request->all());
            return redirect()->route('bieneinmuenbles.index')->with('success','bien inmueble actualizado');
        }

        public function eliminar(Request $request):RedirectResponse
        {
            $inmueble=BienInmueble::find($request->borrado);
            $inmueble->delete();
            return redirect()->route('bienesinmuebles.index')->with('danger','bien inmueble eliminada');
        }
}
