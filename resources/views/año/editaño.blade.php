@extends ('layouts.landing')
@section('title','Año')
@section('subtitle','EDICION DE AÑOS')

@section('content')

<form method ="POST" action ="{{route('años.update', $año->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label> AÑOS </label>
    <input type="text" name="año" value="{{ $año->año }}"/><br/>
    </div>
    @error ('año')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
    <input type="submit" value="Actualizar Año"/>
    </div>
</form>
@endsection