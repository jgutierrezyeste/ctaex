@extends ('layouts.landing')
@section('title','Resolucion')
@section('subtitle','Resolucion')

@section('content')

<form method ="POST" action ="{{route('resoluciones.update', $resolucione->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  RESOLUCION </label>
    <input type="text" name="resolucion" value="{{ $resolucione->resolucion }}"/>
    </div>
    
    @error('resolucion')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Resolucion"/>
        </div>

    <a href="{{route('resoluciones.index')}}"> Vuelta al listado </a>
</form>

@endsection