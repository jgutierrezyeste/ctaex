@props(['titulo','rutaRegreso','rutaAniadir','campos'])
@extends ('layouts.landing')
@section('title','Comision Tutelar de adultos')



@section('subtitle')

    <x-comun_expedientes :titulo="$titulo" ></x-comun_expedientes>

@endsection

@section('content')

    <table style="width:auto;" cellspacing="0" cellpadding ="5" align="center">
        <thead>
            @foreach ($campos as $campo)
                <x-td_variable campo_propio={{$campo}} ></x-td_variable>       
      
            @endforeach
            <x-td_variable campo_propio="" tipo="columna_botones"></x-td_variable>
            <x-td_variable campo_propio="" tipo="columna_botones"></x-td_variable>
            <td><x-boton_aniadir :ruta="$rutaAniadir" ></x-boton_aniadir></td>

        </thead>
       
        
        <tbody>
            @yield('cuerpo')

        </tbody>
    </table>
    <x-boton_indicemenu  :ruta="$rutaRegreso" ></x-boton_indicemenu>
@endsection
