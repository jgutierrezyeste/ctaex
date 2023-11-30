@extends ('layouts.landing')
@section('title','Coches')
@section('subtitle','INSERCION DE COCHE NUEVO')
@section('content')

<form method ="POST" action ="{{route('coches.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','coche')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Coche"/>
        </div>

        <a href="{{route('coches.index')}}"> Vuelta al listado </a>
</form>
@endsection