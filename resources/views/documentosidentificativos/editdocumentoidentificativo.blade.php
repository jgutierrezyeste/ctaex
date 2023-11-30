@extends ('layouts.landing')
@section('title','Documento identificativo')
@section('subtitle','DOCUMENTO IDENTIFICATIVO')

@section('content')

<form method ="POST" action ="{{route('documentosIdentificativos.update', $documentosIdentificativo->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  DOCUMENTO IDENTIFICATIVO </label>
    <input type="text" name="tipo_documento" value="{{ $documentosIdentificativo->tipo_documento }}"/>
    </div>
    
    @error('tipo_documento')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Tipo Documento"/>
        </div>

    <a href="{{route('documentosIdentificativos.index')}}"> Vuelta al listado </a>
</form>

@endsection