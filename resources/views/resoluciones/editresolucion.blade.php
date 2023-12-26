@extends ('layouts.landing')
@section('title','Procedimientos Resolución')
@section('subtitle','Resolución')

@section('content')

<form method ="POST" action ="{{route('resoluciones.update', $resolucione->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  NUMERO </label>
    <input type="text" name="numero" value="{{ $resolucione->numero }}"/>
    </div>
    
    @error('numero')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
        <label>  JUZGADO </label>
        <input type="text" name="juzgado" value="{{ $resolucione->juzgado }}"/>
        </div>
        
        @error('juzgado')
        <p style ="color:red;">{{ $message }}</p>
        @enderror

        <div class="container">
            <label> FECHA </label>
            <input type="text" name="fecha" value="{{ $resolucione->fecha }}"/>
            </div>

            @error('fecha')
            <p style ="color:red;">{{ $message }}</p>
            @enderror
        
    <div class="container">
        <input type="submit" value="Actualizar Resolucion"/>
        </div>

    <a href="{{route('resoluciones.index')}}"> Vuelta al listado </a>
</form>

@endsection