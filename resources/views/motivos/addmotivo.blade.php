@extends ('layouts.landing')
@section('title','Motivo')
@section('subtitle','INSERCION DE MOTIVO')
@section('content')

<form method ="POST" action ="{{route('motivos.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','motivo')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Motivo"/>
        </div>

    <a href="{{route('motivos.index')}}"> Vuelta al listado </a> 
</form>
@endsection