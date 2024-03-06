@extends ('layouts.landing')
@section('title','Prestación Dependencia')
@section('subtitle','Edición de Prestación Dependencia')

@section('content')

<form method ="POST" action ="{{route('prestacionDependencias.update', $prestacionDependencia->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  PRESTACION DEPENDENCIA </label>
    <input type="text" name="nombre" value="{{ $prestacionDependencia->nombre }}"/>
    </div>
    
    @error('prestacion_dependencia')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    
        <div class="container">
        <input type="submit" value="Actualizar Prestacion Dependencia"/>
        </div>

    <a href="{{route('prestacionDependencias.index')}}"> Vuelta al listado </a>
</form>

@endsection