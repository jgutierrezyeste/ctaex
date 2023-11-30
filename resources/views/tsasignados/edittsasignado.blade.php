@extends ('layouts.landing')
@section('title','Trabajador Social')
@section('subtitle','Edición de trabajador social')

@section('content')

<form method ="POST" action ="{{route('tsAsignados.update', $tsAsignado->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  TRABAJADOR SOCIAL </label>
    <input type="text" name="trabajador_social" value="{{ $tsAsignado->trabajador_social }}"/>
    </div>
    
    @error('trabajador_social')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
    <label>  CODIFICACION </label>
    <input type="text" name="codificacion" value="{{ $tsAsignado->codificacion }}"/>
    </div>
        
    @error('codificacion')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
        <div class="container">
        <input type="submit" value="Actualizar Trabajador Social"/>
        </div>

    <a href="{{route('tsAsignados.index')}}"> Vuelta al listado </a>
</form>

@endsection