<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegimenRequest;
use App\Models\Regimen;
use Illuminate\Http\Request;

class RegimenController extends Controller
{
    public function mostrar()
    {
        $regimen=Regimen::all();
        return view ('regimen', compact ('regimen'));
    }

    public function add()
    {
        return view ('addregimen');
    }

    public function store(RegimenRequest $request)
    {
        Regimen::create([
            'alcance'=> $request->alcance,
            'codigo_alcance'=> $request->codigo_alcance
        ]);
        return redirect()->route('index_regimen');
    }

    public function update(RegimenRequest $request,Regimen $regimen)
    {
        $regimen->update($request->all());
        return redirect()->route('index_regimen');
    }

    public function edit(Regimen $regimen)
    {
        return view ('editregimen',compact ('regimen'));
    }

    public function delete (Regimen $regimen)
    {
        return view ('deleteregimen', compact('regimen'));
    }

    public function destroy (Request $request,Regimen $regimen)
    {
        $regimen->delete();
        return redirect()->route('index_regimen');
        
    }

}
