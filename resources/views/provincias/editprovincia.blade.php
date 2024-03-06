@extends ('layouts.landing')
@section('title','Provincia')
@section('subtitle','Provincia')

@section('content')

<form method ="POST" action ="{{route('provincias.update', $provincia->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  PROVINCIA </label>
    <input type="text" name="nombre" value="{{ $provincia->nombre }}"/>
    </div>
    
    @error('cod_provincia')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Provincia"/>
        </div>

    <a href="{{route('provincias.index')}}"> Vuelta al listado </a>
</form>

@endsection