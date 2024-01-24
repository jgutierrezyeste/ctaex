@extends ('layouts.landing')
@section('title','Tutelas')
@section('subtitle')
    
    @component('_components.comun_expedientes')
        @slot('titulo_menu','LISTADO DE LA/S TUTELA/S')
    @endcomponent
    
    @if( $nombre )
        <p > Expedientes con Nombre : {{ $nombre}} </p>
    @endif
    
    @if( $apellido )
    <p > Expedientes con Apellidos : {{ $apellido}} </p>
    @endif

    @if( $id )
   
    <p class="negrita" style="text-align:center "> Expedientes con N. Expediente : {{ $expedientes[0]->expte}} </p>
  
    @endif
@endsection

@section('content')
 
  <table width="100%">
    <thead >
        
         <x-td_variable campo_propio="Nº Tutela" tipo="columna_cabecera"></x-td_variable>
         
          
                
         @include('layouts._partials.resultado_busquedas')
    </thead>
    <tbody>
        @foreach ($expedientes as $expediente)  
        <tr>
            
            <x-datos_resultado_busqueda :expediente="$expediente" campo="expte" ></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" campo="expte"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" tipo="columna_cabecera" campo="nombre"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" tipo="columna_cabecera" campo="apellido"></x-datos_resultado_busqueda>
               
        </tr>
        @endforeach
    </tbody>
  </table>
<br>
  <x-regreso  ruta="tutelas.consultar" regreso=" Volver "></x-regreso>
@endsection