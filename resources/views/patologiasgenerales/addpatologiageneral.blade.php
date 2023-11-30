@extends ('layouts.landing')
@section('title','OPatología general')
@section('subtitle','INSERCION DE PATOLOGIA GENERAL')
@section('content')

<form method ="POST" action ="{{route('patologiasGenerales.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','patologia')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Patología General"/>
        </div>

    <a href="{{route('patologiasGenerales.index')}}"> Vuelta al listado </a> 
</form>
@endsection