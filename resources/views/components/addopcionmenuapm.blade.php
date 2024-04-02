
@props(['titulo','rutaRegreso','rutaGuardar','rutaIndice','campos'])
@extends ('layouts.landing')
@section('title','Comision Tutelar de adultos')

@section('subtitle')

    <x-comun_expedientes :titulo="$titulo" :ruta="$rutaRegreso"></x-comun_expedientes>
    
@endsection

@section('content')
    
<form method ="POST" action ="{{route($rutaGuardar) }}" >
    @csrf
    <table width="100%" cellspacing="0" cellpadding ="5" align="center">
        @foreach ($campos as $campo)
        <td>
        <x-div nombreCampo="{{ $campo }}"></x-div>
        </td>
    @endforeach
        
    </table>
        <div class="container" align="center">
         <input type="submit" value="Guardar"/>
    </div>
    
</form>
<x-boton_indicemenu :ruta="$rutaIndice"></x-boton_indicemenu>
@endsection






