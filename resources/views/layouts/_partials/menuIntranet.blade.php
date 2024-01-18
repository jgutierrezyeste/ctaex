<link rel="stylesheet" href="{{ asset('menu-submenus.css')}}">


<ul class="nav">
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
    <li> <h1>TUTELA</h1>
        <ul style="--cantidad-items:17">
            <li><a href="{{ route('tutelas.consultar') }}"><h1>Consultar</h1></a></li>
            <li><a href="{{ route('tutelas.modificar') }}"><h1>Modificar</h1></a></li>
            <li><a href="{{ route('tutelas.oficios') }}"><h1>Mandar Oficios</h1></a>
                <ul style="--cantidad-items:7">
                    <li><a href=""><h1>Ayuntamiento</h1></a>
                        <ul style="--cantidad-items:2">
                            <li><a href=""><h1>Certificado Bienes</h1></a></li>
                            <li><a href=""><h1>Informe Ayuntamiento Servicios Sociales</h1></a></li>
                            
                        </ul>
                    </li>
                    <li><a href=""><h1>P.N.C</h1></a></li>
                    <li><a href=""><h1>Bancos</h1></a></li>
                    <li><a href=""><h1>Centros</h1></a></li>
                    <li><a href=""><h1>Seguridad Social</h1></a></li>
                    <li><a href=""><h1>Juzgado</h1></a></li>
                    <li><a href=""><h1>Autorizacion Judicial Internamiento</h1></a></li>
                </ul>
            </li>
            <li><a href="{{ route('tutelas.inventarios') }}"><h1>Inventarios</h1></a>
                <ul style="--cantidad-items:3">
                    <li><a href=""><h1>De Bienes</h1></a></li>
                    <li><a href=""><h1>Informe Anual</h1></a></li>
                    <li><a href=""><h1>Fallecimiento</h1></a></li>
                    
                    
                </ul>
            </li>
            
        </ul>
    </li>
    <li> <h1>CURATELA</h1>
        <ul style="--cantidad-items:4">
            <li><a href="{{ route('curatelas.consultar') }}"><h1>Consultar</h1></a></li>
            <li><a href="{{ route('curatelas.modificar') }}"><h1>Modificar</h1></a></li>
            <li><a href="{{ route('curatelas.oficios') }}"><h1>Mandar Oficios</h1></a>
                <ul style="--cantidad-items:7">
                    <li><a href=""><h1>Ayuntamiento</h1></a>
                        <ul style="--cantidad-items:2">
                            <li><a href=""><h1>Certificado Bienes</h1></a></li>
                            <li><a href=""><h1>Informe Ayuntamiento Servicios Sociales</h1></a></li>
                            
                        </ul>
                    </li>
                    <li><a href=""><h1>P.N.C</h1></a></li>
                    <li><a href=""><h1>Bancos</h1></a></li>
                    <li><a href=""><h1>Centros</h1></a></li>
                    <li><a href=""><h1>Seguridad Social</h1></a></li>
                    <li><a href=""><h1>Juzgado</h1></a></li>
                    <li><a href=""><h1>Autorizacion Judicial Internamiento</h1></a></li>
                </ul></li>
            <li><a href="{{ route('curatelas.inventarios') }}"><h1>Inventarios</h1></a>
                <ul style="--cantidad-items:3">
                    <li><a href=""><h1>De Bienes</h1></a></li>
                    <li><a href=""><h1>Informe Anual</h1></a></li>
                    <li><a href=""><h1>Fallecimiento</h1></a></li>
                    
                    
                </ul></li>
            
        </ul>
    </li>
    <li> <h1>ADMINISTRADOR DE BIENES</h1>
        <ul style="--cantidad-items:4">
            <li><a href="{{ route('administracionbienes.consultar') }}"><h1>Consultar</h1></a></li>
            <li><a href="{{ route('administracionbienes.modificar') }}"><h1>Modificar</h1></a></li>
            <li><a href="{{ route('administracionbienes.oficios') }}"><h1>Mandar Oficios</h1></a>
                <ul style="--cantidad-items:7">
                    <li><a href=""><h1>Ayuntamiento</h1></a>
                        <ul style="--cantidad-items:2">
                            <li><a href=""><h1>Certificado Bienes</h1></a></li>
                            <li><a href=""><h1>Informe Ayuntamiento Servicios Sociales</h1></a></li>
                            
                        </ul>
                    </li>
                    <li><a href=""><h1>P.N.C</h1></a></li>
                    <li><a href=""><h1>Bancos</h1></a></li>
                    <li><a href=""><h1>Centros</h1></a></li>
                    <li><a href=""><h1>Seguridad Social</h1></a></li>
                    <li><a href=""><h1>Juzgado</h1></a></li>
                    <li><a href=""><h1>Autorizacion Judicial Internamiento</h1></a></li>
                </ul>
            </li>
            <li><a href="{{ route('administracionbienes.inventarios') }}"><h1>Inventarios</h1></a>
                <ul style="--cantidad-items:3">
                    <li><a href=""><h1>De Bienes</h1></a></li>
                    <li><a href=""><h1>Informe Anual</h1></a></li>
                    <li><a href=""><h1>Fallecimiento</h1></a></li>
                    
                    
                </ul>
            </li>
            
        </ul>
    </li>
    
</ul>

<a href="{{route('principal')}}"> Vuelta al menú principal </a> 