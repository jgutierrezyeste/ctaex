@extends ('layouts.landing')
@section('title','Empleados')
@section('subtitle','INSERCION DE EMPLEADO  NUEVO')
@section('content')

<form method ="POST" action ="{{route('empleados.store')}}">
    @csrf
    
   
    @component('_components.div')
    @slot('nombre_campo','nombre')
@endcomponent
    
    <div class="container">
    <input type="submit" value="Añadir Empleado"/>
    </div>

    <a href="{{route('empleados.index')}}"> Vuelta al listado </a>
</form>
@endsection