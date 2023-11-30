@extends ('layouts.landing')
@section('title','Nivel de Dependencias')
@section('subtitle','Nivel de Dependencias')

@section('content')

<form method ="POST" action ="{{route('nivelDependencias.update', $nivelDependencia->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  NIVEL DEPENDENCIAS </label>
    <input type="text" name="nivel" value="{{ $nivelDependencia->nivel }}"/>
    </div>
    
    @error('nivel')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Nivel Dependencia"/>
        </div>

    <a href="{{route('nivelDependencias.index')}}"> Vuelta al listado </a>
</form>

@endsection