<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpedienteRequest;
use App\Models\Expediente;
use App\Models\Juzgado;
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
    {   $juzgados=Juzgado::all();
        $regimenes=Regimen::all();
        return view('expedientes.addexpediente',compact('juzgados','regimenes'));
    }

    public function consultar($vista):View
    {
      
        $expedientes=Expediente::all();
        $regimenes=Regimen::all();
      
        return view($vista, compact('expedientes','regimenes'));
    }

    public function oficios($vista):View
    {

        $expedientes=Expediente::all();
        $regimenes=Regimen::all();
        return view($vista,compact('expedientes','regimenes'));
    }

    public function buscar( $id)
    {
      
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


    


public function busqueda(ExpedienteRequest $request,$vista)
{
    
    if ($request->has("id"))
    {
      $id=$request->get('id');
      $expte=$request->get('expte');
    }
  if ($request->has('nombre'))
      $nombre=$request->get('nombre');
  if ($request->has('apellido1'))
      $apellido1=$request->get('apellido1');
 
  $expedientes = DB::table('expedientes')
  ->select ('id', 'nombre', 'apellido1', 'fecha_nacimiento', 'expte','numero_documento')
  ->when($id, function ($query) use ($id) {
      return $query->where('id','=',$id);})
  ->when($nombre, function ($query) use ($nombre) {
      return $query->where('nombre','=',$nombre);})
  ->when($apellido1, function ($query) use ($apellido1) {
          return $query->where('apellido1','=',$apellido1);})
  ->Paginate(5);
  
  
  
  return view ( $vista ,compact('expedientes','id','nombre','apellido1'));
}

    /**
     * Display the specified resource.
     */
    public function show(Expediente $expediente)
    {
       // return view('expedientes.showexpediente', compact('expediente'));
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expediente $expediente)
    {
        
    }
    
    public function modificar():View 
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

    public function inventarios($vista)
    {
        $expedientes = Expediente::all();
        $regimenes=Regimen::all();
        return view($vista,compact('expedientes','regimenes'));
    }

    
}
