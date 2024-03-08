@extends ('layouts.landing')
@section('title',' Tipos de Via')
@section('subtitle','INSERCION DE TIPO VIA')
@section('content')

<form method ="POST" action ="{{route('tiposVia.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent

    
    
    <div class="container">
        <input type="submit" value="Añadir Tipo Via"/>
        </div>

    <a href="{{route('tiposVia.index')}}"> Vuelta al listado </a> 
</form>
@endsection