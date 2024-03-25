
@props(['titulo','rutaRegreso','rutaGuardar','rutaIndice','campos'])
@extends ('layouts.landing')
@section('title','Comision Tutelar de adultos')

@section('subtitle')

    <x-comun_expedientes :titulo="$titulo" :ruta="$rutaRegreso"></x-comun_expedientes>
    
@endsection

@section('content')
    
<form method ="POST" action ="{{route($rutaGuardar) }}">
    @csrf
    
    @foreach ( $campos as $campo)
    <x-div nombreCampo="{{ $campo }}" ></x-div>
    @endforeach
    
    <div class="container">
        <input type="submit" value="Guardar"/>
    </div>
</form>
<x-boton_indicemenu :ruta="$rutaIndice"></x-boton_indicemenu>
@endsection






