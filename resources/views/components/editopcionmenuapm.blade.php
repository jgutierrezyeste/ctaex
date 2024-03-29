@props(['titulo','rutaRegreso','rutaActualizar','rutaIndice','elementoEdicion','campos'])
@extends ('layouts.landing')
@section('title','Comision Tutelar de adultos')

@section('subtitle')

    <x-comun_expedientes :titulo="$titulo" :ruta="$rutaRegreso"></x-comun_expedientes>
    
@endsection

@section('content')
    
<form method ="POST" action ="{{route($rutaActualizar,$elementoEdicion->id) }}">
    @method('PUT')
    @csrf

    @foreach ($campos as $campo)
    <x-div_edicion nombreCampo="{{ $campo }}" :nombreModelo="$elementoEdicion" ></x-div_edicion>
    
    @endforeach
    
    <div class="container">
        <input type="submit" value="Actualizar"/>
    </div>
</form>
<x-boton_indicemenu :ruta="$rutaIndice"></x-boton_indicemenu>
@endsection






