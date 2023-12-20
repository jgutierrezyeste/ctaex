@extends ('layouts.landing')
@section('title',' Juzgado Penal')
@section('subtitle','INSERCION DE JUZGADO PENAL')
@section('content')

<form method ="POST" action ="{{route('juzgadoPenal.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Juzgado Penal"/>
        </div>

    <a href="{{route('juzgadoPenal.index')}}"> Vuelta al listado </a> 
</form>
@endsection