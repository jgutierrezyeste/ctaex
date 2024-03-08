
@props(['titulo','rutaRegreso','rutaGuardar','rutaIndice'])


@section('subtitle')

    <x-comun_expedientes :titulo="$titulo" :ruta="$rutaRegreso"></x-comun_expedientes>
    
@endsection

@section('content')
    
<form method ="POST" action ="{{route($rutaGuardar) }}">
    @csrf
    @yield('campos')
    
    <div class="container">
        <input type="submit" value="Guardar"/>
    </div>
</form>
<x-boton_indicemenu :ruta="$rutaIndice"></x-boton_indicemenu>
@endsection






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