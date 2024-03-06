@extends ('layouts.landing')
@section('title','Prestacion')
@section('subtitle','Prestacion')

@section('content')

<form method ="POST" action ="{{route('prestaciones.update', $prestacione->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  PRESTACION </label>
    <input type="text" name="nombre" value="{{ $prestacione->nombre }}"/>
    </div>
    
    @error('prestacion')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Prestacion"/>
        </div>

    <a href="{{route('prestaciones.index')}}"> Vuelta al listado </a>
</form>

@endsection