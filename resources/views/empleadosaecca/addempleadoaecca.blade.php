@extends ('layouts.landing')
@section('title','Empleados Aecca')
@section('subtitle','INSERCION DE EMPLEADO AECCA NUEVO')
@section('content')

<form method ="POST" action ="{{route('empleadosAecca.store')}}">
    @csrf
    
   
    <@component('_components.div')
    @slot('nombre_campo','empleado')
@endcomponent
    
    <div class="container">
    <input type="submit" value="Añadir Empleado"/>
    </div>

    <a href="{{route('empleadosAecca.index')}}"> Vuelta al listado </a>
</form>
@endsection