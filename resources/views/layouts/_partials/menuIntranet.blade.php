<link rel="stylesheet" href="{{ asset('menu.css')}}">

<nav >
<ul>
    <li> <h1>EXPEDIENTES</h1>
        <ul style="--cantidad-items:5">
            <li><a href="{{ route('expedientes.index') }}"><h1>Indexar expediente</h1></a></li>
            <li><a href="{{ route('expedientes.create') }}"><h1>Iniciar Expedientes</h1></a></li>
            <li><a href="{{ route('expedientes.busquedaEdicion') }}"><h1>Modificar Expedientes</h1></a></li>
            <li><a href="{{ route('expedientes.consultar') }}"><h1>Consultar Expedientes</h1></a></li>
            <li>Mandar oficios</li>
        </ul>
    </li>
    <li> <h1>DEFENSAS JUDICIALES</h1>
        <ul style="--cantidad-items:1">
             <li><a href="{{ route('defensasjudiciales.index') }}"><h1>Listar defensas judiciales</h1></a></li>
        </ul>
    </li>
    <li> <h1>TUTELA</h1></li>
    <li> <h1>CURATELA</h1></li>
    <li> <h1>ADMINISTRADOR DE BIENES</h1></li>
    
</ul>
</nav>
<a href="{{route('principal')}}"> Vuelta al menú principal </a> 