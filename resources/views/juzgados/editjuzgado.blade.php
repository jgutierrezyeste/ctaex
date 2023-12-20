@extends ('layouts.landing')
@section('title','Juzgado')
@section('subtitle','Juzgado')

@section('content')

<form method ="POST" action ="{{route('juzgados.update', $juzgado->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  JUZGADO </label>
    <input type="text" name="nombre" value="{{ $juzgado->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Juzgado"/>
        </div>

    <a href="{{route('juzgados.index')}}"> Vuelta al listado </a>
</form>

@endsection