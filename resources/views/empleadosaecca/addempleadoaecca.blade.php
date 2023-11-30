@extends ('layouts.landing')
@section('title','Empleados Aecca')
@section('subtitle','INSERCION DE EMPLEADO AECCA NUEVO')
@section('content')

<form method ="POST" action ="{{route('empleadosAecca.store')}}">
    @csrf
    
   
    <div class="container">
    <label> EMPLEADO </label>
    <input type="text" name="empleado" /><br/>
    </div>
    @error ('empleado')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
    <input type="submit" value="Añadir Empleado"/>
    </div>
</form>
@endsection