@extends ('layouts.landing')
@section('title','Regimen')
@section('subtitle','Regimen')

@section('content')

<form method ="POST" action ="{{route('regimenes.update', $regimene->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  REGIMEN </label>
    <input type="text" name="regimen" value="{{ $regimene->regimen }}"/>
    </div>
    
    @error('regimen')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
        <label>  CODIGO_REGIMEN </label>
        <input type="text" name="codigo_regimen" value="{{ $regimene->codigo_regimen }}"/>
        </div>
        
        @error('codigo_regimen')
        <p style ="color:red;">{{ $message }}</p>
        @enderror

    <div class="container">
        <input type="submit" value="Actualizar Régimen"/>
    </div>

    <a href="{{route('regimenes.index')}}"> Vuelta al listado </a>
</form>

@endsection
    