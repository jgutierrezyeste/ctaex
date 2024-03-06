@extends ('layouts.landing')
@section('title','Opción de autorización')
@section('subtitle','Edición de Opciones de Autorización')

@section('content')

<form method ="POST" action ="{{route('opcionAutorizacion.update', $opcionAutorizacion->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  OPCION </label>
    <input type="text" name="nombre" value="{{ $opcionAutorizacion->nombre }}"/>
    </div>
    
    @error('opciones')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Opción de Autorización"/>
        </div>

    <a href="{{route('opcionAutorizacion.index')}}"> Vuelta al listado </a>
</form>

@endsection