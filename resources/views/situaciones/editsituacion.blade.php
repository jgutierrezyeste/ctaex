@extends ('layouts.landing')
@section('title','Estado')
@section('subtitle','Estado')

@section('content')

<form method ="POST" action ="{{route('estado.update', $estado->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  NOMBRE </label>
    <input type="text" name="nombre" value="{{ $estado->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Estado"/>
        </div>

    <a href="{{route('estado.index')}}"> Vuelta al listado </a>
</form>

@endsection