@extends ('layouts.landing')
@section('title','Relaciones')
@section('subtitle','INSERCION DE RELACION NUEVA')

@section('content')
<form method ="POST" action ="{{route('relaciones.store')}}">
    @csrf
    @component('_components.div')
    @slot('nombre_campo','nombre')
@endcomponent
    <div class="container">
    <input type="submit" value="Añadir Relacion"/>
    </div>

    <a href="{{route('relaciones.index')}}"> Vuelta al listado </a>
</form>
@endsection