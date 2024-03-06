@extends ('layouts.landing')
@section('title',' Prestación Dependencia')
@section('subtitle','INSERCION DE PRESTACION DE DEPENDENCIA')
@section('content')

<form method ="POST" action ="{{route('prestacionDependencias.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent

    
    
    <div class="container">
        <input type="submit" value="Añadir Prestación Dependencia"/>
        </div>

    <a href="{{route('prestacionDependencias.index')}}"> Vuelta al listado </a> 
</form>
@endsection