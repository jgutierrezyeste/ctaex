@extends ('layouts.landing')
@section('title','Seguros médicos')
@section('subtitle','INSERCION DE SEGURO MEDICO')
@section('content')

<form method ="POST" action ="{{route('segurosMedicos.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir seguro médico"/>
        </div>

    <a href="{{route('segurosMedicos.index')}}"> Vuelta al listado </a> 
</form>
@endsection