@extends ('layouts.landing')
@section('title','Profesional')
@section('subtitle','INSERCION DE PROFESIONAL')
@section('content')

<form method ="POST" action ="{{route('profesionales.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','profesional')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Profesional"/>
        </div>

    <a href="{{route('profesionales.index')}}"> Vuelta al listado </a> 
</form>
@endsection