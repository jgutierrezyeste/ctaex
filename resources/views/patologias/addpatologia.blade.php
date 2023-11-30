@extends ('layouts.landing')
@section('title','Patologia')
@section('subtitle','INSERCION DE PATOLOGIA')
@section('content')

<form method ="POST" action ="{{route('patologias.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','patologia')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Patologia"/>
        </div>

    <a href="{{route('patologias.index')}}"> Vuelta al listado </a> 
</form>
@endsection