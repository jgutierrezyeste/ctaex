<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpedienteRequest;
use App\Models\Domicilio;
use App\Models\Expediente;
use App\Models\ExpedienteDatoPersonal;
use App\Models\ExpedienteEntidadBancaria;
use App\Models\ExpedientePrestacion;
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
      
        $expedientes=Expediente::orderBy('num_expte_intranet')->get();
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



public function busqueda(Request $request,$vista)
{
    
 
    if ($request->has("id"))
    {
      $id=$request->get('id');
      
    }
  if ($request->has('nombre'))
      $nombre=$request->get('nombre');
  if ($request->has('apellido1'))
      $apellido1=$request->get('apellido1');
    if ($request->has('apellido2'))
      $apellido2=$request->get('apellido2');
 
  $expedientes = DB::table('expedientes_intranet')
  
  ->select ('*')
  ->join('expediente_datos_personales','expediente_datos_personales_id','=','expediente_datos_personales.id')
  ->when($id, function ($query) use ($id) {
      return $query->where('expedientes_intranet.id','=',$id);})
  ->when($nombre, function ($query) use ($nombre) {
      return $query-> where('nombre','=',$nombre);})
  ->when($apellido1, function ($query) use ($apellido1) {
    
          return $query->where('apellido1','=',$apellido1);})
  ->when($apellido2, function ($query) use ($apellido2) {
    
            return $query->where('apellido2','=',$apellido2);})
  ->Paginate(5);
    
  
  $numexpteintranet=$expedientes[0]->num_expte_intranet??'';
return view ( $vista ,compact('expedientes','id','nombre','apellido1','apellido2','numexpteintranet'));
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
    
    public function modificar($vista):View 
        {
        $expedientes=Expediente::orderBy('num_expte_intranet')->get();
        $regimenes=Regimen::all();
        return view($vista, compact('expedientes','regimenes'));
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

    public function mostrardatos($vistadatos,$idexpte):View
    {
       
        

        $expediente = Expediente::where ('expediente_datos_personales_id',$idexpte)->first();
        $expdatospersonales= ExpedienteDatoPersonal::where('id',$idexpte)->first();
        
    
        $regimenes=Regimen::all();
        $juzgados=Juzgado::all();
    
        return view ($vistadatos,compact('expediente','expdatospersonales','regimenes','juzgados'));
    }

    public function obtener_datos($vista,$id){
        $expediente = Expediente::where ('id',$id)->first();
        $archivo=fopen("obtener_datos.txt","w+");
        fwrite($archivo,$vista.PHP_EOL);
        fwrite($archivo,$id);
       
        //$expdatospersonales= ExpedienteDatoPersonal::where('id',$expediente->expediente_datos_personales_id)->first();
        return view($vista,compact('expediente'));
    }

}
