@extends ('layouts.landing')
@section('title','Año')
@section('subtitle','INSERCION DE AÑOS')

@section('content')
<form method ="POST" action ="{{route('años.store')}}">
    @csrf
    
   
    @component('_components.div')
        @slot('nombre_campo','año')
    @endcomponent
    
   
    <div class="container">
    <input type="submit" value="Añadir Año"/>
    </div>

    <a href="{{route('años.index')}}"> Vuelta al listado </a>
</form>
@endsection