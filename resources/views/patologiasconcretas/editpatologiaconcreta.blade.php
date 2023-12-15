@extends ('layouts.landing')
@section('title','Patologia')
@section('subtitle','Patologia')

@section('content')

<form method ="POST" action ="{{route('patologiasConcretas.update', $patologiasConcreta->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  PATOLOGIA CONCRETA </label>
    <input type="text" name="nombre" value="{{ $patologiasConcreta->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Patologia"/>
        </div>

    <a href="{{route('patologiasConcretas.index')}}"> Vuelta al listado </a>
</form>

@endsection