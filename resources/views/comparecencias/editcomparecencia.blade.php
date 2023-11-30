@extends ('layouts.landing')
@section('title','Comparecencia')
@section('subtitle','EDICION DE COMPARECENCIA')

@section('content')

<form method ="POST" action ="{{route('comparecencias.update', $comparecencia->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label> COMPARECENCIA  </label>
    <input type="text" name="comparecencia" value="{{ $comparecencia->comparecencia }}"/>
    </div>
    
    @error('comparecencia')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <input type="submit" value="Actualizar Comparecencia"/>

</form>

@endsection    