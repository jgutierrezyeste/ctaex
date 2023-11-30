@extends ('layouts.landing')
@section('title','sEXO')
@section('subtitle','INSERCION DE SEXO')
@section('content')

<form method ="POST" action ="{{route('sexo.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','sexo')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir sexo"/>
        </div>

    <a href="{{route('sexo.index')}}"> Vuelta al listado </a> 
</form>
@endsection