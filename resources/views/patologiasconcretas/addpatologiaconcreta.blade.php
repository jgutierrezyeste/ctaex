@extends ('layouts.landing')
@section('title','Patologia')
@section('subtitle','INSERCION DE PATOLOGIA CONCRETA')
@section('content')

<form method ="POST" action ="{{route('patologiasConcretas.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Patologia"/>
        </div>

    <a href="{{route('patologiasConcretas.index')}}"> Vuelta al listado </a> 
</form>
@endsection