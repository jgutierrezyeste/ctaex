@extends ('layouts.landing')
@section('title','Patologia General')
@section('subtitle','Edición de patologías generales')

@section('content')

<form method ="POST" action ="{{route('patologiasGenerales.update', $patologiasGenerale->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  PATOLOGIAS GENERALES </label>
    <input type="text" name="patologia" value="{{ $patologiasGenerale->patologia }}"/>
    </div>
    
    @error('patologia')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Patologia General"/>
        </div>

    <a href="{{route('patologiasGenerales.index')}}"> Vuelta al listado </a>
</form>

@endsection