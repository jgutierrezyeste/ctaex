@extends ('layouts.landing')
@section('title','Letrado')
@section('subtitle','Letrado')

@section('content')

<form method ="POST" action ="{{route('letrados.update', $letrado->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label>  LETRADO </label>
    <input type="text" name="letrado" value="{{ $letrado->letrado }}"/>
    </div>
    
    @error('letrado')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    

    <div class="container">
        <input type="submit" value="Actualizar Letrado"/>
        </div>

    <a href="{{route('letrados.index')}}"> Vuelta al listado </a>
</form>

@endsection