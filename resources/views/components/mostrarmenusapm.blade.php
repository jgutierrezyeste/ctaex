@props(['titulo','rutaRegreso','rutaAniadir'])
@extends ('layouts.landing')
@section('title','Comision Tutelar de adultos')



@section('subtitle')

    <x-comun_expedientes :titulo="$titulo" :ruta="$rutaRegreso"></x-comun_expedientes>
    <x-boton_aniadir :ruta="$rutaAniadir" ></x-boton_aniadir>
@endsection

@section('content')
    
    <table width="55%" cellspacing="0" cellpadding ="5" align="center">
        <thead>
            @yield('cabecera')
        </thead>
        <tbody>
            @yield('cuerpo')
        
        </tbody>
    </table>
@endsection
