@extends ('layouts.landing')
@section('title','Coches')
@section('subtitle','EDICION DE COCHE')

@section('content')

<form method ="POST" action ="{{route('coches.update', $coch->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label> COCHE  </label>
    <input type="text" name="coche" value="{{ $coch->coche }}"/>
    </div>
    
    @error('coche')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <input type="submit" value="Actualizar Coche"/>

</form>

@endsection    