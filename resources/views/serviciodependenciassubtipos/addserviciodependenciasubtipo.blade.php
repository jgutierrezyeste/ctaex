@extends ('layouts.landing')
@section('title','Servicio Dependencias Subtipo')
@section('subtitle','INSERCION DE SERVICIO DEPENDENCIA SUBTIPO')
@section('content')

<form method ="POST" action ="{{route('subtipoDependencias.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Servicio Dependencia Subtipo"/>
        </div>

    <a href="{{route('subtipoDependencias.index')}}"> Vuelta al listado </a> 
</form>
@endsection