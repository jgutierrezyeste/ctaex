@extends ('layouts.landing')
@section('title','Iniciador Procedimiento')
@section('subtitle','Iniciador Procedimiento')

@section('content')

<form method ="POST" action ="{{route('iniciadorProcedimiento.update', $iniciadorProcedimiento->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  INICIADOR </label>
    <input type="text" name="nombre" value="{{ $iniciadorProcedimiento->nombre }}"/>
    </div>
    
    @error('iniciador')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Iniciador Procedimiento"/>
        </div>

    <a href="{{route('iniciadorProcedimiento.index')}}"> Vuelta al listado </a>
</form>

@endsection