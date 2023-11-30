@extends ('layouts.landing')
@section('title','Entidad Bancaria')
@section('subtitle','INSERCION DE ENTIDAD BANCARIA NUEVA')

@section('content')
<form method ="POST" action ="{{route('entidadesbancarias.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','entidad')
    @endcomponent
    <div class="container">
    <input type="submit" value="Añadir Entidad bancaria"/>
    </div>

    <a href="{{route('entidadesbancarias.index')}}"> Vuelta al listado </a>
</form>
@endsection