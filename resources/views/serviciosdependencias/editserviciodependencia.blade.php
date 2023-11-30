@extends ('layouts.landing')
@section('title','Servicios Dependencia')
@section('subtitle','SERVICIOS DEPENDENCIA')

@section('content')

<form method ="POST" action ="{{route('serviciosDependencias.update', $serviciosDependencia->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label> SERVICIO  </label>
    <input type="text" name="servicio" value="{{ $serviciosDependencia->servicio }}"/>
    </div>
    
    @error('servicio')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
        <input type="submit" value="Actualizar Servicio Dependencia"/>
        </div>

    

    <a href="{{route('serviciosDependencias.index')}}"> Vuelta al listado </a>
</form>

@endsection