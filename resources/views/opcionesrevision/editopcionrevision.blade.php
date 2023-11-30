@extends ('layouts.landing')
@section('title','Opción de revisión')
@section('subtitle','Edición de Opciones de Revisión')

@section('content')

<form method ="POST" action ="{{route('opcionRevision.update', $opcionRevision->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  OPCION </label>
    <input type="text" name="opciones" value="{{ $opcionRevision->opciones }}"/>
    </div>
    
    @error('opciones')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Opción de Revisión"/>
        </div>

    <a href="{{route('opcionRevision.index')}}"> Vuelta al listado </a>
</form>

@endsection