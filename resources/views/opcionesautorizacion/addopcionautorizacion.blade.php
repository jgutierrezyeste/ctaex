@extends ('layouts.landing')
@section('title','Opción de Autorizacion')
@section('subtitle','INSERCION DE OPCION DE AUTORIZACION')
@section('content')

<form method ="POST" action ="{{route('opcionAutorizacion.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Opción Autorizacion"/>
        </div>

    <a href="{{route('opcionAutorizacion.index')}}"> Vuelta al listado </a> 
</form>
@endsection