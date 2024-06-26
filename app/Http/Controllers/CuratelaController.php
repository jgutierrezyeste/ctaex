<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpedienteRequest;
use App\Models\Expediente;
use App\Models\Regimen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CuratelaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function consultar($vista):View
    {  
        $expedientes = Expediente::where('expte','like','%C%')->get();
        $regimenes=Regimen::all();
        
        return view($vista, compact('expedientes','regimenes'));}

    public function modificar()
    {
        $expedientes = Expediente::where('expte','like','%C%')->get();
        $regimenes=Regimen::all();
        
        return view('curatelas.modificarcuratela', compact('expedientes','regimenes'));
    }
    public function oficios($vista)
    {
        $expedientes = Expediente::where('expte','like','%C%')->get();
        $regimenes=Regimen::all();
        return view($vista,compact('expedientes','regimenes'));
    }

    public function inventarios($vista)
    {
        $expedientes = Expediente::where('expte','like','%C%')->get();
        $regimenes=Regimen::all();
        return view($vista,compact('expedientes','regimenes'));
    }

    public function busqueda (ExpedienteRequest $request,$vista)
    {
        
        if ($request->has("id"))
          {
            $id=$request->get('id');
            $expte=$request->get('expte');
          }
        if ($request->has('nombre'))
            $nombre=$request->get('nombre');
        if ($request->has('apellido'))
            $apellido=$request->get('apellido');
       
        $expedientes = DB::table('expedientes')
        ->select ('id', 'nombre', 'apellido', 'fecha_nacimiento', 'expte','numero_documento')
        ->when($id, function ($query) use ($id) {
            return $query->where('id','=',$id);})
        ->when($nombre, function ($query) use ($nombre) {
            return $query->where('nombre','=',$nombre);})
        ->when($apellido, function ($query) use ($apellido) {
                return $query->where('apellido','=',$apellido);})
        ->where ('expte','like','%C%')
        ->Paginate(5);
        
        
        
        return view ($vista,compact('expedientes','id','nombre','apellido'));
    }
}
