@extends ('layouts.landing')
@section('title','Regimen Sanitario')
@section('subtitle','Regimen Sanitario')

@section('content')

<form method ="POST" action ="{{route('sanitarios.update', $sanitario->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  REGIMEN SANITARIO </label>
    <input type="text" name="regimen_sanitario" value="{{ $sanitario->regimen_sanitario }}"/>
    </div>
    
    @error('regimen_sanitario')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Regimen Sanitario"/>
        </div>

    <a href="{{route('sanitarios.index')}}"> Vuelta al listado </a>
</form>

@endsection