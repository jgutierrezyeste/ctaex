@extends ('layouts.landing')
@section('title','Juzgado de Instruccion')
@section('subtitle','INSERCION DE JUZGADO DE INSTRUCCION')
@section('content')

<form method ="POST" action ="{{route('juzgadoInstruccion.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','juzgado')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Juzgado Instruccion"/>
        </div>

    <a href="{{route('juzgadoInstruccion.index')}}"> Vuelta al listado </a> 
</form>
@endsection