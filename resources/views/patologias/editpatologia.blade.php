@extends ('layouts.landing')
@section('title','Patologia')
@section('subtitle','Patologia')

@section('content')

<form method ="POST" action ="{{route('patologias.update', $patologia->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  PATOLOGIA </label>
    <input type="text" name="patologia" value="{{ $patologia->patologia }}"/>
    </div>
    
    @error('patologia')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Patologia"/>
        </div>

    <a href="{{route('patologias.index')}}"> Vuelta al listado </a>
</form>

@endsection