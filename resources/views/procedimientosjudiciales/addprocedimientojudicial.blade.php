@extends ('layouts.landing')
@section('title',' Procedimiento judicial')
@section('subtitle','INSERCION DE PORCEDIMIENTO JUDICIAL')
@section('content')

<form method ="POST" action ="{{route('procedimientosJudiciales.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','codificacion')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','procedimiento')
    @endcomponent

    
    <div class="container">
        <input type="submit" value="Añadir Prestación Dependencia"/>
        </div>

    <a href="{{route('procedimientosJudiciales.index')}}"> Vuelta al listado </a> 
</form>
@endsection