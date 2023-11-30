@extends ('layouts.landing')
@section('title','Servicio Dependencias')
@section('subtitle','INSERCION DE SERVICIO DEPENDENCIA')
@section('content')

<form method ="POST" action ="{{route('serviciosDependencias.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','servicio')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Servicio Dependencia"/>
        </div>

    <a href="{{route('serviciosDependencias.index')}}"> Vuelta al listado </a> 
</form>
@endsection