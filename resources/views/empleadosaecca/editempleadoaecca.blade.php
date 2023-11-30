@extends ('layouts.landing')
@section('title','Empleados Aecca')
@section('subtitle','EDICION DE EMPLEADOS')

@section('content')

<form method ="POST" action ="{{route('empleadosAecca.update', $empleadosAecca->id)}}">
    
    @method('PUT')
    @csrf
    
   

    <div class="container">
    <label> EMPLEADO  </label>
    <input type="text" name="empleado" value="{{ $empleadosAecca->empleado }}"/>
    </div>
    @error ('empleado')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    
    

    <input type="submit" value="Actualizar Empleado Aecca"/>

</form>

@endsection