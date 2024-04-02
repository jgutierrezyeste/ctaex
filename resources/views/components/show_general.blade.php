@props(['expedientes','regimenes','titulo','ruta','nombre','id','apellido1','campos','vista'])
@extends ('layouts.landing')
@section('title','Prueba')
@section('subtitle')
    
    <x-comun_expedientes :titulo="$titulo"></x-comun_expedientes>
    
    @if( $nombre )
        <p  class="negrita" style="text-align:center "> Expedientes con Nombre : {{ $nombre}} </p>
    @endif
    
    @if( $apellido1 )
    <p  class="negrita" style="text-align:center "> Expedientes con Apellidos : {{ $apellido1}} </p>
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