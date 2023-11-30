@extends ('layouts.landing')
@section('title','Juzgado de Instruccion')
@section('subtitle','Juzgado de Instrucción')

@section('content')

<form method ="POST" action ="{{route('juzgadoInstruccion.update', $juzgadoInstruccion->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  JUZAGADO INSTRUCCION </label>
    <input type="text" name="juzgado" value="{{ $juzgadoInstruccion->juzgado }}"/>
    </div>
    
    @error('juzgado')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Juzgado de Instruccion"/>
        </div>

    <a href="{{route('juzgadoInstruccion.index')}}"> Vuelta al listado </a>
</form>

@endsection