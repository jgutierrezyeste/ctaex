@extends ('layouts.landing')
@section('title','Documento Identificativo')
@section('subtitle','DOCUMENTO IDENTIFICATIVO')
@section('content')

<form method ="POST" action ="{{route('documentosIdentificativos.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','tipo')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Tipo Documento"/>
        </div>

    <a href="{{route('documentosIdentificativos.index')}}"> Vuelta al listado </a> 
</form>
@endsection