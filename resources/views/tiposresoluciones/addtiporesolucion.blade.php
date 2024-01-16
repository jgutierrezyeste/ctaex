@extends ('layouts.landing')
@section('title','Resolucion')
@section('subtitle','INSERCION DE TIPO RESOLUCION')
@section('content')

<form method ="POST" action ="{{route('tiposresoluciones.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Procedimiento Resolucion"/>
        </div>

    <a href="{{route('tiposresoluciones.index')}}"> Vuelta al listado </a> 
</form>
@endsection