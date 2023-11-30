@extends ('layouts.landing')
@section('title','Entidad Bancaria')
@section('subtitle','INSERCION DE ENTIDAD BANCARIA NUEVA')

@section('content')
<form method ="POST" action ="{{route('entidadesbancarias.store')}}">
    @csrf
    <div class="container">
    <label> ENTIDAD BANCARIA </label>
    <input type="text" name="entidad" /><br/>
    </div>
    @error ('entidad')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    <div class="container">
    <input type="submit" value="Añadir Entidad bancaria"/>
    </div>
</form>
@endsection