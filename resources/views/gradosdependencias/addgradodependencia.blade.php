@extends ('layouts.landing')
@section('title','Grados dependencia')
@section('subtitle','INSERCION DE GRADOS DEPENDENCIA')
@section('content')

<form method ="POST" action ="{{route('gradosDependencia.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','grado')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Grado"/>
        </div>

    <a href="{{route('gradosDependencia.index')}}"> Vuelta al listado </a> 
</form>
@endsection