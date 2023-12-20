@extends ('layouts.landing')
@section('title',' Trabajador Social')
@section('subtitle','INSERCION DE TRABAJADOR SOCIAL')
@section('content')

<form method ="POST" action ="{{route('trabajadoresSociales.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','codificacion')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Trabajador Social"/>
        </div>

    <a href="{{route('trabajadoresSociales.index')}}"> Vuelta al listado </a> 
</form>
@endsection