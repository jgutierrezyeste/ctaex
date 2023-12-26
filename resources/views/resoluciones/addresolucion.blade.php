@extends ('layouts.landing')
@section('title','Resolucion')
@section('subtitle','INSERCION DE RESOLUCION')
@section('content')

<form method ="POST" action ="{{route('resoluciones.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','numero')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','juzgado')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','fecha')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Resolucion"/>
        </div>

    <a href="{{route('resoluciones.index')}}"> Vuelta al listado </a> 
</form>
@endsection