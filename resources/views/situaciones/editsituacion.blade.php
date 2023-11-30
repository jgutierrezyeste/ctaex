@extends ('layouts.landing')
@section('title','Situacion')
@section('subtitle','Situacion')

@section('content')

<form method ="POST" action ="{{route('situacion.update', $situacion->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  SITUACION </label>
    <input type="text" name="situacion" value="{{ $situacion->situacion }}"/>
    </div>
    
    @error('situacion')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Situacion"/>
        </div>

    <a href="{{route('situacion.index')}}"> Vuelta al listado </a>
</form>

@endsection