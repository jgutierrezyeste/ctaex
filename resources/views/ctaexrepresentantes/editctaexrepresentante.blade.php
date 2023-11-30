@extends ('layouts.landing')
@section('title','Representantes Ctaex')
@section('subtitle','EDICION DE REPRESENTANTE')

@section('content')

<form method ="POST" action ="{{route('representantesCtaex.update', $representantesCtaex->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label> NOMBRE  </label>
    <input type="text" name="nombre" value="{{ $representantesCtaex->nombre }}"/>
    </div>
    
    @error('nombre')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <input type="submit" value="Actualizar Representante"/>

</form>

@endsection