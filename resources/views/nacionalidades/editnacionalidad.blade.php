@extends ('layouts.landing')
@section('title','Nacionalidad')
@section('subtitle','Nacionalidad')

@section('content')

<form method ="POST" action ="{{route('nacionalidades.update', $nacionalidade->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  NACIONALIDAD </label>
    <input type="text" name="nacionalidad" value="{{ $nacionalidade->nacionalidad }}"/>
    </div>
    
    @error('nacionalidad')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Nacionalidad"/>
        </div>

    <a href="{{route('nacionalidades.index')}}"> Vuelta al listado </a>
</form>

@endsection