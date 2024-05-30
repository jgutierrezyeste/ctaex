@props(['elementos','titulo','rutaRegreso','vista','rutaAniadir','campos','rutaEdicion'])
@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')


@section('subtitle')
    <x-comun_expedientes :titulo="$titulo"></x-comun_expedientes>
    <x-boton_aniadir :ruta="$rutaAniadir" ></x-boton_aniadir>
@endsection

@section('content')

<x-comun_show_select :nombreMenu="$titulo" :elementos="$elementos" :campos="$campos" :rutaEdicion="$rutaEdicion" ></x-comun_show_menu>



@endsection