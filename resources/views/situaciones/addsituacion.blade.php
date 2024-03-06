@extends ('layouts.landing')
@section('title','Estado')
@section('subtitle','INSERCION DE ESTADO')
@section('content')

<form method ="POST" action ="{{route('estado.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Estado"/>
        </div>

    <a href="{{route('estado.index')}}"> Vuelta al listado </a> 
</form>
@endsection