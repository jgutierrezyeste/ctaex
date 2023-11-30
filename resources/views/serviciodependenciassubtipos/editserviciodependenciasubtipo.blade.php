@extends ('layouts.landing')
@section('title','Servicios Dependencia Subtipos')
@section('subtitle','SERVICIOS DEPENDENCIA SUBTIPOS')

@section('content')

<form method ="POST" action ="{{route('subtipoDependencias.update', $subtipoDependencia->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  SERVICIO_SUBTIPO </label>
    <input type="text" name="servicio_subtipo" value="{{ $subtipoDependencia->servicio_subtipo }}"/>
    </div>
    
    @error('servicio_subtipo')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <input type="submit" value="Actualizar Servicio  Dependencia Subtipo"/>

    <a href="{{route('subtipoDependencias.index')}}"> Vuelta al listado </a>
</form>

@endsection