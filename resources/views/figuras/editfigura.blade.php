@extends ('layouts.landing')
@section('title','Figuras')
@section('subtitle','FIGURAS')

@section('content')

<form method ="POST" action ="{{route('figuras.update', $figura->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  FIGURAS </label>
    <input type="text" name="figura" value="{{ $figura->figura }}"/>
    </div>
    
    @error('figura')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Figura"/>
        </div>

    <a href="{{route('figuras.index')}}"> Vuelta al listado </a>
</form>

@endsection