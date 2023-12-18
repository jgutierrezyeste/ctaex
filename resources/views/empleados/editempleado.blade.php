@extends ('layouts.landing')
@section('title','Empleados Aecca')
@section('subtitle','EDICION DE EMPLEADOS')

@section('content')

<form method ="POST" action ="{{route('empleados.update', $empleado->id)}}">
    
    @method('PUT')
    @csrf
    
   

    <div class="container">
    <label> EMPLEADO  </label>
    <input type="text" name="nombre" value="{{ $empleado->nombre }}"/>
    </div>
    @error ('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    
    <div class="container">
        <input type="submit" value="Actualizar Empleados"/>
        </div>

    <a href="{{route('empleados.index')}}"> Vuelta al listado </a>

</form>

@endsection