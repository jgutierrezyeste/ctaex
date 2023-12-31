<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpedienteRequest;
use App\Models\Expediente;
use App\Models\Regimen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ExpedienteController extends Controller
{
    public function index():View
    {
        $expedientes=Expediente::all();
        return view('expedientes.expediente', compact('expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('expedientes.addexpediente');
    }

    public function consultar():View
    {
        $archivo=fopen("CONSULTAR.txt","w+");
        $expedientes=Expediente::all();
        $regimenes=Regimen::all();
        
        return view('expedientes.consultarexpediente', compact('expedientes','regimenes'));
    }

    public function buscar( $id)
    {
       $archivo=fopen("buscar.txt","w+");
        $expediente=Expediente::find($id);
        return view ('expedientes.showexpediente',compact('expediente'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store( ExpedienteRequest $request):RedirectResponse
    {
        Expediente::create($request->all());
        return redirect()->route('expediente.index')->with('success','Expediente dependencia añadida');
    }

    /*public function busqueda(ExpedienteRequest $request)
    {
        
        $archivo=fopen("busqueda.txt","w+");
         
        $expediente=Expediente::find($request->id);     
        fwrite($archivo,$expediente->id);

      
        

        
        return view ('expedientes.showexpediente',compact('expediente'));
    }*/

    public function busqueda (ExpedienteRequest $request)
    {
        $archivo=fopen("busqueda_completa.txt","w+");
        if ($request->has("id"))
          $id=$request->get('id');
        
         
        if ($request->has('nombre'))
            $nombre=$request->get('nombre');
            

        $expedientes = DB::table('expedientes')
        ->select ('id', 'nombre', 'apellido', 'fecha_nacimiento', 'expte','numero_documento')
        ->where ('id','=',$id)
        ->orwhere('nombre','=',$nombre)
        ->Paginate(5);
        
        return view ('expedientes.showexpediente',compact('expedientes','id','nombre'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Expediente $expediente)
    {
        return view('expedientes.showexpediente', compact('expediente'));
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expediente $expediente)
    {
        
    }
    
    public function busquedaEdicion():View 
        {
        $expedientes=Expediente::all();
        $regimenes=Regimen::all();
        return view('expedientes.editexpediente', compact('expedientes','regimenes'));
        }
    /**
     * Update the specified resource in storage.
     */
    public function update(ExpedienteRequest $request, Expediente $expediente):RedirectResponse
    {
       $expediente->update($request->all());
       return redirect()->route('expedientes.index')->with('success','Actualizado Expediente'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expediente $expediente)
    {
        $expediente->delete();
        return redirect()->route('expediente.index')->with('danger','Eliminado expediente'); 

    }

    
}
