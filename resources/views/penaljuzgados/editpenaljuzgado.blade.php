@extends ('layouts.landing')
@section('title','Juzgado Penal')
@section('subtitle','Edición de juzgado penal')

@section('content')

<form method ="POST" action ="{{route('juzgadoPenal.update', $juzgadoPenal->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  JUZGADO PENAL </label>
    <input type="text" name="nombre" value="{{ $juzgadoPenal->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Juzgado Penal"/>
        </div>

    <a href="{{route('juzgadoPenal.index')}}"> Vuelta al listado </a>
</form>

@endsection