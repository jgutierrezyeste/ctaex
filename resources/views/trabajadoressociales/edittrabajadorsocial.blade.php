@extends ('layouts.landing')
@section('title','Trabajador Social')
@section('subtitle','Edición de trabajador social')

@section('content')

<form method ="POST" action ="{{route('trabajadoresSociales.update', $trabajadoresSociale->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  TRABAJADOR SOCIAL </label>
    <input type="text" name="nombre" value="{{ $trabajadoresSociale->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
    <label>  CODIFICACION </label>
    <input type="text" name="codificacion" value="{{ $trabajadoresSociale->codificacion }}"/>
    </div>
        
    @error('codificacion')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
        <div class="container">
        <input type="submit" value="Actualizar Trabajador Social"/>
        </div>

    <a href="{{route('trabajadoresSociales.index')}}"> Vuelta al listado </a>
</form>

@endsection