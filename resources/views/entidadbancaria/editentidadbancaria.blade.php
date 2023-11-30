@extends ('layouts.landing')
@section('title','Entidad Bancaria')
@section('subtitle','EDICION DE ENTIDAD BANCARIA')

@section('content')
<p>entamos en edicion</p>
<form method ="POST" action ="{{route('entidadesbancarias.update', $entidadesbancaria->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label> ENTIDAD </label>
    <input type="text" name="entidad" value="{{ $entidadesbancaria->entidad }}"/><br/>
    </div>
    @error ('entidad')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
    <input type="submit" value="Actualizar Entidad"/>
    </div>

    <a href="{{route('entidadesbancarias.index')}}"> Vuelta al listado </a>
</form>
@endsection