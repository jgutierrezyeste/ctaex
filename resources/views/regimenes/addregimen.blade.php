@extends ('layouts.landing')
@section('title','Régimen')
@section('subtitle','INSERCION DE REGIMEN')
@section('content')

<form method ="POST" action ="{{route('regimenes.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','regimen')
    @endcomponent
    
    @component('_components.div')
    @slot('nombre_campo','codigo_regimen')
    @endcomponent

    <div class="container">
        <input type="submit" value="Añadir Regimen"/>
        </div>

    <a href="{{route('regimenes.index')}}"> Vuelta al listado </a> 
</form>
@endsection
    
