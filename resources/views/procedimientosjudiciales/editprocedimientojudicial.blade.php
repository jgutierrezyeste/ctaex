@extends ('layouts.landing')
@section('title','Procedimiento Judicial')
@section('subtitle','Edición de Procedimiento Judicial')

@section('content')

<form method ="POST" action ="{{route('procedimientosJudiciales.update', $procedimientosJudiciale->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  PROCEDIMIENTO JUDICIAL </label>
    <input type="text" name="procedimiento" value="{{ $procedimientosJudiciale->procedimiento }}"/>
    </div>
    
    @error('procedimiento')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
        <label>  CODIFICACION </label>
        <input type="text" name="codificacion" value="{{ $procedimientosJudiciale->codificacion }}"/>
        </div>
        
        @error('codificacion')
        <p style ="color:red;">{{ $message }}</p>
        @enderror
    
        <div class="container">
        <input type="submit" value="Actualizar Procedimiento Judicial"/>
        </div>

    <a href="{{route('procedimientosJudiciales.index')}}"> Vuelta al listado </a>
</form>

@endsection