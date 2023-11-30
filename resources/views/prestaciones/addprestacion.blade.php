@extends ('layouts.landing')
@section('title','Prestación')
@section('subtitle','INSERCION DE PRESTACION')
@section('content')

<form method ="POST" action ="{{route('prestaciones.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','prestacion')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Prestacion"/>
        </div>

    <a href="{{route('prestaciones.index')}}"> Vuelta al listado </a> 
</form>
@endsection