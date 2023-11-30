@extends ('layouts.landing')
@section('title','Parentescos')
@section('subtitle','INSERCION DE PARENTESCO NUEVA')

@section('content')
<form method ="POST" action ="{{route('parentescos.store')}}">
    @csrf
    <div class="container">
    <label> PARENTESCO </label>
    <input type="text" name="parentesco" /><br/>
    
    @error ('parentesco')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    <div class="container">
    <input type="submit" value="Añadir Parentesco"/>
    </div>
</form>
@endsection