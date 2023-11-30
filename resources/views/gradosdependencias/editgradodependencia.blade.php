@extends ('layouts.landing')
@section('title','Grados dependencia')
@section('subtitle','GRADOS')

@section('content')

<form method ="POST" action ="{{route('gradosDependencia.update', $gradosDependencium->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  GRADO DEPENDENCIAS </label>
    <input type="text" name="grado" value="{{ $gradosDependencium->grado }}"/>
    </div>
    
    @error('grado')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Grado"/>
        </div>

    <a href="{{route('gradosDependencia.index')}}"> Vuelta al listado </a>
</form>

@endsection