@props(['expedientes','regimenes','titulo','rutaRegreso','vista'])
@extends ('layouts.landing')
@section('title','Comision Tutelar de adultos')



@section('subtitle')
    <x-comun_expedientes :titulo="$titulo" :ruta="$ruta"></x-comun_expedientes>
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
