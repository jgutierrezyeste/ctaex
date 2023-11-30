@extends ('layouts.landing')
@section('title','Año')
@section('subtitle','INSERCION DE AÑOS')

@section('content')
<form method ="POST" action ="{{route('años.store')}}">
    @csrf
    <div class="container">
    <label> AÑOS </label>
    <input type="text" name="año" /><br/>
    
    @error ('año')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    <div class="container">
    <input type="submit" value="Añadir Año"/>
    </div>
</form>
@endsection