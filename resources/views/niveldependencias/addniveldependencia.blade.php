@extends ('layouts.landing')
@section('title','Nivel de Dependencia')
@section('subtitle','INSERCION DE NIVEL DE DEPENDENCIA')
@section('content')

<form method ="POST" action ="{{route('nivelDependencias.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nivel')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Nivel Dependencia"/>
        </div>

    <a href="{{route('nivelDependencias.index')}}"> Vuelta al listado </a> 
</form>
@endsection