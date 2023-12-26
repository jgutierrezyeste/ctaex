@extends ('layouts.landing')
@section('title','Procedimientos Resolución')
@section('subtitle','Procedimientos Resolución')

@section('content')

<form method ="POST" action ="{{route('procedimientosresoluciones.update', $procedimientosresolucione->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  NOMBRE </label>
    <input type="text" name="nombre" value="{{ $procedimientosresolucione->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Procedimiento Resolucion"/>
        </div>

    <a href="{{route('procedimientosresoluciones.index')}}"> Vuelta al listado </a>
</form>

@endsection