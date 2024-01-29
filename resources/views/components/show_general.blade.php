@props(['expedientes','regimenes','titulo','ruta','nombre','id','apellido','vista'])
@extends ('layouts.landing')
@section('title','Prueba')
@section('subtitle')
    
    <x-comun_expedientes :titulo="$titulo"></x-comun_expedientes>
    
    @if( $nombre )
        <p  class="negrita" style="text-align:center "> Expedientes con Nombre : {{ $nombre}} </p>
    @endif
    
    @if( $apellido )
    <p  class="negrita" style="text-align:center "> Expedientes con Apellidos : {{ $apellido}} </p>
    @endif

    @if( $id )
   
    <p class="negrita" style="text-align:center "> Expedientes con N. Expediente : {{ $expedientes[0]->expte}} </p>
  
    @endif
@endsection

@section('content')
 
  <table width="100%">
    <thead > 
        <x-td_variable campo_propio="" tipo="columna_cabecera"></x-td_variable>
          
         @include('layouts._partials.resultado_busquedas')
    </thead>
    <tbody>
        @foreach ($expedientes as $expediente)  
        <tr>
            <x-datos_resultado_busqueda :expediente="$expediente" campo=""></x-datos_resultado_busqueda>
           
            <x-datos_resultado_busqueda :expediente="$expediente" campo="expte"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" tipo="columna_cabecera" campo="nombre"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" tipo="columna_cabecera" campo="apellido"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" tipo="columna_cabecera" campo="fecha_remision"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" tipo="columna_cabecera" campo="fecha_recepcion"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" tipo="columna_cabecera" campo="regimen_definitivo"></x-datos_resultado_busqueda>
        </tr>
        @endforeach
    </tbody>
  </table>
<br>
    {{ $expedientes->appends($_GET)->links() }}
  <x-regreso  :ruta="$ruta" :vista="$vista" regreso=" Volver "></x-regreso>
@endsection