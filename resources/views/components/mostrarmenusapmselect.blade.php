@props(['elementos','titulo','rutaRegreso','vista','rutaAniadir','campos','rutaEdicion','rutaActualizar','getById','rutaEliminar'])
@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')


@section('subtitle')
    <x-comun_expedientes :titulo="$titulo"></x-comun_expedientes>
    <x-boton_aniadir :ruta="$rutaAniadir" ></x-boton_aniadir>
@endsection

@section('content')



<x-comun_show_select :nombreMenu="$titulo" :elementos="$elementos" :campos="$campos" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">

</x-comun_show_select>

<x-boton_indicemenu  :ruta="$rutaRegreso" ></x-boton_indicemenu>

@endsection