@extends ('layouts.landing')
@section('title','Sexo')
@section('subtitle','Sexo')

@section('content')

<form method ="POST" action ="{{route('sexo.update', $sexo->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  SEXO </label>
    <input type="text" name="nombre" value="{{ $sexo->nombre }}"/>
    </div>
    
    @error('sexo')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Sexo"/>
        </div>

    <a href="{{route('sexo.index')}}"> Vuelta al listado </a>
</form>

@endsection