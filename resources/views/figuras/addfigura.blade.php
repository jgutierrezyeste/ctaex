@extends ('layouts.landing')
@section('title','Figuras')
@section('subtitle','INSERCION DE FIGURA')
@section('content')

<form method ="POST" action ="{{route('figuras.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','figura')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Figura"/>
        </div>

    <a href="{{route('figuras.index')}}"> Vuelta al listado </a> 
</form>
@endsection