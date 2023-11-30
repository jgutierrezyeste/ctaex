@extends ('layouts.landing')
@section('title','Puesto')
@section('subtitle','Puesto')

@section('content')

<form method ="POST" action ="{{route('puestos.update', $puesto->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  PUESTO </label>
    <input type="text" name="puesto" value="{{ $puesto->puesto }}"/>
    </div>
    
    @error('puesto')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Puesto"/>
        </div>

    <a href="{{route('puestos.index')}}"> Vuelta al listado </a>
</form>

@endsection