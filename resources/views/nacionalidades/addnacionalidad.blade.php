@extends ('layouts.landing')
@section('title','Nacionaidad')
@section('subtitle','INSERCION DE NACIONALIDAD')
@section('content')

<form method ="POST" action ="{{route('nacionalidades.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nacionalidad')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Nacionalidad"/>
        </div>

    <a href="{{route('nacionalidades.index')}}"> Vuelta al listado </a> 
</form>
@endsection