@extends ('layouts.landing')
@section('title','Parentesco')
@section('subtitle','EDICION DE PARENTESCO')

@section('content')

<form method ="POST" action ="{{route('parentescos.update', $parentesco->id)}}">
    
    @method('PUT')
    @csrf
    <div class="container">
    <label> PARENTESCO </label>
    <input type="text" name="parentesco" value="{{ $parentesco->parentesco }}"/><br/>
    </div>
    @error ('parentesco')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    
    <div class="container">
    <input type="submit" value="Actualizar Parentesco"/>
    </div>
</form>
@endsection