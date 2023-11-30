@extends ('layouts.landing')
@section('title','Comparecencia')
@section('subtitle','INSERCION DE COMPARECENCIA NUEVO')
@section('content')

<form method ="POST" action ="{{route('comparecencias.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','comparecencia')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Comparecencia"/>
        </div>
</form>
@endsection