@extends ('layouts.landing')
@section('title','Motivo')
@section('subtitle','Motivo')

@section('content')

<form method ="POST" action ="{{route('motivos.update', $motivo->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  MOTIVO </label>
    <input type="text" name="motivo" value="{{ $motivo->motivo }}"/>
    </div>
    
    @error('motivo')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Motivo"/>
        </div>

    <a href="{{route('motivos.index')}}"> Vuelta al listado </a>
</form>

@endsection