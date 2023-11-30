@extends ('layouts.landing')
@section('title','Representantes')
@section('subtitle','INSERCION DE REPRESENTANTE NUEVO')
@section('content')

<form method ="POST" action ="{{route('representantesCtaex.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    <div class="container">
        <input type="submit" value="Añadir Representante"/>
        </div>
</form>
@endsection