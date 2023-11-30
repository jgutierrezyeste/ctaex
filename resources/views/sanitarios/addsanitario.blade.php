@extends ('layouts.landing')
@section('title','Regimen Sanitario')
@section('subtitle','INSERCION DE REGIMEN SANITARIO')
@section('content')

<form method ="POST" action ="{{route('sanitarios.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','regimen_sanitario')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir regimen sanitario"/>
        </div>

    <a href="{{route('sanitarios.index')}}"> Vuelta al listado </a> 
</form>
@endsection