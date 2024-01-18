@extends ('layouts.landing')
@section('title','Tutelas')
@section('subtitle')
    
    @component('_components.comun_expedientes')
        @slot('titulo_menu','LISTADO DE LA/S TUTELA/S')
    @endcomponent
    
    @if( $nombre )
        <p> Expedientes con Nombre : {{ $nombre}} </p>
    @endif
    
    @if( $apellido )
    <p> Expedientes con Apellidos : {{ $apellido}} </p>
    @endif

    @if( $id )
   
    <p> Expedientes con N. Expediente : {{ $expedientes[0]->expte}} </p>
  
    @endif
@endsection

@section('content')
 
  <table class="table table-sm table-bordered">
    <thead >
        @component('_components.td_variable')
         @slot('campo_propio','Nº Tutela')
         @endcomponent
         @include('layouts._partials.resultado_busquedas')
    </thead>
    <tbody>
        @foreach ($expedientes as $expediente)  
        <tr>
            
            <x-datos_resultado_busqueda :expediente="$expediente" campo="expte"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" campo="expte"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" campo="nombre"></x-datos_resultado_busqueda>
            <x-datos_resultado_busqueda :expediente="$expediente" campo="apellido"></x-datos_resultado_busqueda>
               
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection