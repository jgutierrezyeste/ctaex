@extends ('layouts.landing')
@section('title','Profesional')
@section('subtitle','Profesional')

@section('content')

<form method ="POST" action ="{{route('profesionales.update', $profesionale->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  PROFESIONAL </label>
    <input type="text" name="profesional" value="{{ $profesionale->profesional }}"/>
    </div>
    
    @error('profesional')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Profesional"/>
        </div>

    <a href="{{route('profesionales.index')}}"> Vuelta al listado </a>
</form>

@endsection