@extends ('layouts.landing')
@section('title','Relacion')
@section('subtitle','EDICION DE RELACIONES')

@section('content')

<form method ="POST" action ="{{route('relaciones.update', $relacione->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label> RELACION </label>
    <input type="text" name="nombre" value="{{ $relacione->nombre }}"/><br/>
    </div>
    @error ('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
    <input type="submit" value="Actualizar Relacion"/>
    </div>


    <a href="{{route('relaciones.index')}}"> Vuelta al listado </a>
</form>
@endsection