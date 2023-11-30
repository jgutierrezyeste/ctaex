@extends ('layouts.landing')
@section('title','Letrado')
@section('subtitle','INSERCION DE LETRADO')
@section('content')

<form method ="POST" action ="{{route('letrados.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','letrado')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Letrado"/>
        </div>

    <a href="{{route('letrados.index')}}"> Vuelta al listado </a> 
</form>
@endsection