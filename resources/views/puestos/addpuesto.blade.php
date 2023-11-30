@extends ('layouts.landing')
@section('title','Puesto')
@section('subtitle','INSERCION DE PUESTO')
@section('content')

<form method ="POST" action ="{{route('puestos.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','puesto')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Puesto"/>
        </div>

    <a href="{{route('puestos.index')}}"> Vuelta al listado </a> 
</form>
@endsection