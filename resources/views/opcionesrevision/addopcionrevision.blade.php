@extends ('layouts.landing')
@section('title','Opción de Revisión')
@section('subtitle','INSERCION DE OPCION DE REVISION')
@section('content')

<form method ="POST" action ="{{route('opcionRevision.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','opciones')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Opción Revisión"/>
        </div>

    <a href="{{route('opcionRevision.index')}}"> Vuelta al listado </a> 
</form>
@endsection