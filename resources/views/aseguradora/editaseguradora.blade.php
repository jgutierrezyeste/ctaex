@extends ('layouts.landing')
@section('title','Aseguradoras')
@section('subtitle','EDICION DE ASEGURADORA')

@section('content')

<form method ="POST" action ="{{route('aseguradoras.update', $aseguradora->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label> ASEGURADORA  </label>
    <input type="text" name="aseguradora" value="{{ $aseguradora->aseguradora }}"/>
    </div>
    @error ('aseguradora')
    <p style ="color:red;">{{ $message }}</p>
    @enderror

    <div class="container">
    <label> telefono_avisos  </label>
    <input type="text" name="telefono_avisos" value="{{ $aseguradora->telefono_avisos }}"/>
    </div>
    @error ('telefono_avisos')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
    <label> telefono_avisos2  </label>
    <input type="text" name="telefono_avisos2" value="{{ $aseguradora->telefono_avisos2 }}"/>
    </div>
    @error ('telefono_avisos2')
    <p style ="color:red;">{{ $message }}</p>
    @enderror

    <div class="container">
        <input type="submit" value="Actualizar Aseguradora"/>
        </div>

    <a href="{{route('aseguradoras.index')}}"> Vuelta al listado </a>

</form>

@endsection