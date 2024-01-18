@extends ('layouts.landing')

@section('content')
<link rel="stylesheet" href="style.css">
<div class="bienvenido">
    <label>
        <p >BIENVENIDO AL CENTRO TUTELAR DE ADULTOS</p>
    </label>
</div>

<div class="botones">
<form method ="GET" action ="{{route('autenticacion_apm')}}">
    @csrf
        <button type="submit" class="botoninicio"> PANEL ADMINISTRACION</button>
  
</form>

<form method ="GET" action ="{{route('autenticacion_intranet')}}">
    @csrf
    <button type="submit"  class="botoninicio"> PAGINA INTRANET</button>
    
</form>
</div>
@endsection