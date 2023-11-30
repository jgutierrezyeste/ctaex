@extends ('layouts.landing')
@section('title',' Trabajador Social')
@section('subtitle','INSERCION DE TRABAJADOR SOCIAL')
@section('content')

<form method ="POST" action ="{{route('tsAsignados.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','trabajador_social')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','codificacion')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Trabajador Social"/>
        </div>

    <a href="{{route('tsAsignados.index')}}"> Vuelta al listado </a> 
</form>
@endsection