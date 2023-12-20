@extends ('layouts.landing')
@section('title','Juzgado')
@section('subtitle','INSERCION DE JUZGADO')
@section('content')

<form method ="POST" action ="{{route('juzgados.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Juzgado"/>
        </div>

    <a href="{{route('juzgados.index')}}"> Vuelta al listado </a> 
</form>
@endsection