<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentoIdentificativoRequest;
use App\Models\DocumentoIdentificativo;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocumentoIdentificativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $documentos=DocumentoIdentificativo::all();
        return view('documentosidentificativos.documentoidentificativo',compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('documentosidentificativos.adddocumentoidentificativo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentoIdentificativoRequest $request):RedirectResponse
    {
        DocumentoIdentificativo::create($request->all());
        return redirect()->route('documentosIdentificativos.index')->with('success', 'Documento identificativo añadido satisfactoriamente');
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
    public function edit(DocumentoIdentificativo $documentosIdentificativo)
    {
        return view ('documentosidentificativos.editdocumentoidentificativo', compact('documentosIdentificativo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentoIdentificativoRequest $request, DocumentoIdentificativo $documentosIdentificativo):RedirectResponse
    {
        $documentosIdentificativo->update($request->all());
        return redirect()->route('documentosIdentificativos.index')->with('success','Documento identificativo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentoIdentificativo $documentosIdentificativo):RedirectResponse
    {
     $documentosIdentificativo->delete();
     return redirect()->route('documentosIdentificativos.index')->with('danger','Documento identificativo eliminado.');
    }

    public function getDocumentoIdentificativoById($id)
    {       
        $documento = DocumentoIdentificativo::find($id);
       
        return $documento;
    }

public function actualizar(DocumentoIdentificativoRequest $request):RedirectResponse
    {
        $documento=DocumentoIdentificativo::find($request->id);
        
        $documento->update($request->all());
        return redirect()->route('documentosIdentificativos.index')->with('success','documento actualizado');
    }

    public function eliminar(Request $request):RedirectResponse
    {
        $documento=DocumentoIdentificativo::find($request->borrado);
        $documento->delete();
        return redirect()->route('documentosIdentificativos.index')->with('danger','documento eliminada');
    }
}
