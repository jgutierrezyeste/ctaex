@extends ('layouts.landing')
@section('title','Situación')
@section('subtitle','INSERCION DE SITUACION')
@section('content')

<form method ="POST" action ="{{route('situacion.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','situacion')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Situacion"/>
        </div>

    <a href="{{route('situacion.index')}}"> Vuelta al listado </a> 
</form>
@endsection