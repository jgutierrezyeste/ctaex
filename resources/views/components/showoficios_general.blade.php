@php
    $vistadatos="expedientes.consulta_datos_expediente";
    $vistadatosextendidos="expedientes.consulta_datos_expediente_extendido";

    //$numexpte="01-2019";
   
@endphp
@props(['expedientes','regimenes','titulo','ruta','nombre','id','apellido1','apellido2','numexpteintranet','campos','vista'])
@extends ('layouts.landing')
@section('title','Prueba')
@section('subtitle')
    
    <x-comun_expedientes :titulo="$titulo"></x-comun_expedientes>
    
    @if( $nombre )
        <p  class="negrita" style="text-align:center "> Expedientes con Nombre : {{ $nombre}} </p>
    @endif
    
    @if( $apellido1  or $apellido2)
    <p  class="negrita" style="text-align:center "> Expedientes con Apellidos : {{ $apellido1??' '}} {{ $apellido2??' ' }} </p>
    @endif

    @if( $id )
   
    <p class="negrita" style="text-align:center "> Expedientes con N. Expediente : {{ $numexpteintranet}}</p>


    @endif
@endsection

@section('content')
 
  <table width="100%" align="center" margin-left="20%">
    <thead > 
        <x-td_variable campo_propio="" tipo="columna_cabecera"></x-td_variable>
          
         @include('layouts._partials.resultado_busquedasoficio')
    </thead>
    <tbody>
  
      
    
      @foreach ($expedientes as $expediente)  
      
      <tr>
        <x-datos_resultado_busqueda :expediente="$expediente" campo=""></x-datos_resultado_busqueda>
        <td class="columna_cabecera"><a href=""><img src="{{asset('assets/img/impresion.png')}}" align="left"></a><a href=""><img src="{{asset('assets/img/lupa.png')}}" align="left"></a><a href="{{ route('expediente.datos', ['vistadatos' => $vistadatos,'idexpte'=> $expediente->id]) }}">{{ $expediente->num_expte_intranet??'Sin datos' }}</a></td>

        

        <!--<x-datos_resultado_busqueda_hipervinculo :expediente="$expediente" tipo="columna_cabecera" campo="num_expte_intranet"></x-datos_resultado_busqueda_hipervinculo>
        <x-datos_resultado_busqueda_hipervinculo :expediente="$expediente" tipo="columna_cabecera" campo="expte"></x-datos_resultado_busqueda_hipervinculo>-->
          @foreach($campos as $campo)
            <x-datos_resultado_busqueda :expediente="$expediente" tipo="columna_cabecera" :campo="$campo" ></x-datos_resultado_busqueda>
          @endforeach
      </tr>
      @endforeach
    </tbody>
  </table>
<br>
    {{ $expedientes->appends($_GET)->links() }}
  <x-regreso  :ruta="$ruta" :vista="$vista" regreso=" Volver "></x-regreso>
@endsection