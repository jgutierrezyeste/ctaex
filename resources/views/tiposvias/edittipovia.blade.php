@extends ('layouts.landing')
@section('title','Tipo Via')
@section('subtitle','Edición de tipo de vía')

@section('content')

<form method ="POST" action ="{{route('tiposVia.update', $tiposVium->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  TIPOS DE VIA </label>
    <input type="text" name="nombre" value="{{ $tiposVium->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    
    
        <div class="container">
        <input type="submit" value="Actualizar Tipo Via"/>
        </div>

    <a href="{{route('tiposVia.index')}}"> Vuelta al listado </a>
</form>

@endsection