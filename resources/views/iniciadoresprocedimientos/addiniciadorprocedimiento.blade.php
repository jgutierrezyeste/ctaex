@extends ('layouts.landing')
@section('title','Iniciador Procedimiento')
@section('subtitle','INSERCION DE INICIADOR PROCEDIMIENTO')
@section('content')

<form method ="POST" action ="{{route('iniciadorProcedimiento.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','iniciador')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Iniciador Procedimiento"/>
        </div>

    <a href="{{route('iniciadorProcedimiento.index')}}"> Vuelta al listado </a> 
</form>
@endsection