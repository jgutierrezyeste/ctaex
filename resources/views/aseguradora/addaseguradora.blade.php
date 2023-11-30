@extends ('layouts.landing')
@section('title','Aseguradoras')
@section('subtitle','INSERCION DE ASEGURADORA NUEVA')
@section('content')

<form method ="POST" action ="{{route('aseguradoras.store')}}">
    @csrf
    <div class="container">
    <label> ASEGURADORA </label>
    <input type="text" name="aseguradora" /><br/>
    </div>
    @error ('aseguradora')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    <div class="container">
    <label> telefono_avisos </label>
    <input type="text" name="telefono_avisos" /><br/>
    </div>
    <div class="container">
    <label> telefono_avisos2 </label>
    <input type="text" name="telefono_avisos2" /><br/>
    </div>
    
    <div class="container">
    <input type="submit" value="Añadir Aseguradora"/>
    </div>

    <a href="{{route('aseguradoras.index')}}"> Vuelta al listado </a>
</form>
@endsection