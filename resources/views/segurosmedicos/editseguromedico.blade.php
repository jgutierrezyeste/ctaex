@extends ('layouts.landing')
@section('title','Seguro Médico')
@section('subtitle','Seguro Médico')

@section('content')

<form method ="POST" action ="{{route('segurosMedicos.update', $segurosMedico->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  SEGURO MEDICO </label>
    <input type="text" name="nombre" value="{{ $segurosMedico->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Seguro Médico"/>
        </div>

    <a href="{{route('segurosMedicos.index')}}"> Vuelta al listado </a>
</form>

@endsection