@extends ('layouts.landing')
@section('title','Parentescos')
@section('subtitle','INSERCION DE PARENTESCO NUEVA')

@section('content')
<form method ="POST" action ="{{route('parentescos.store')}}">
    @csrf
    @component('_components.div')
    @slot('nombre_campo','parentesco')
@endcomponent
    <div class="container">
    <input type="submit" value="Añadir Parentesco"/>
    </div>

    <a href="{{route('parentescos.index')}}"> Vuelta al listado </a>
</form>
@endsection