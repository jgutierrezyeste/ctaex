@extends ('layouts.principalIntranet')
@section('title','Comisión tutelar de adultos')
@section('subtitle','INICIO EXPEDIENTE')
@section('content')

<form method ="POST" action ="{{route('expedientes.store')}}">
    @csrf
    
   Fechas
    @component('_components.div')
    @slot('nombre_campo','expte')
    @endcomponent
    
    <div class="container">
    <input type="submit" value="Añadir Expediente"/>
    </div>

    <a href="{{route('index_intranet')}}"> Vuelta al listado </a>
</form>
@endsection