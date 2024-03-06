@extends ('layouts.landing')
@section('title','Provincia')
@section('subtitle','INSERCION DE PROVINCIA')
@section('content')

<form method ="POST" action ="{{route('provincias.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Provincia"/>
        </div>

    <a href="{{route('provincias.index')}}"> Vuelta al listado </a> 
</form>
@endsection