@extends ('layouts.landing')
@section('title','Tipos Resolución')
@section('subtitle','Tipos Resolución')

@section('content')

<form method ="POST" action ="{{route('tiposresoluciones.update', $tiposresolucione->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  NOMBRE </label>
    <input type="text" name="nombre" value="{{ $tiposresolucione->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Tipo Resolucion"/>
        </div>

    <a href="{{route('tiposresoluciones.index')}}"> Vuelta al listado </a>
</form>

@endsection