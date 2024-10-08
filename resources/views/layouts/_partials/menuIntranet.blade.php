<link rel="stylesheet" href="{{ asset('menu-submenus.css')}}">

<ul class="menu_contenedor">
    <li class="menu"> <h1><img src="{{asset('assets/img/expediente.png')}}">EXPEDIENTES<img src="{{asset('assets/img/flechita.png')}}"></h1>
        <ul   style="--cantidad-items:4">
            
            <li class="submenu"><a href="{{ route('expedientes.create') }}"><h1>Iniciar Expedientes</h1></a></li>
            <li class="submenu"><a href="{{ route('expedientes.modificar','expedientes.editexpediente') }}"><h1>Modificar Expedientes</h1></a></li>
            <li class="submenu"><a href="{{ route('expedientes.consultar','expedientes.consultarexpediente') }}"><h1>Consultar Expedientes</h1></a></li>
            <li class="submenu"><a href=""><h1>Mandar oficios</h1></a>
                <ul   style="--cantidad-items:3">
                    
                    <li class="submenu1"><a href="{{ route('expedientes.oficios','expedientes.oficiostutor')}}"><h1>Acuerdo de Tutor</h1></a></li>
                    <li class="submenu1"><a href="{{ route('expedientes.oficios', 'expedientes.oficiosdefensorjudicial')}}"><h1>Acuerdo de Defensor Judicial</h1></a></li>
                    <li class="submenu1"><a href="{{ route('expedientes.oficios','expedientes.oficioscurador')}}"><h1>Acuerdo de Curador</h1></a></li>
                    
                </ul>
            </li>
        </ul>
    </li>
    
    <li class="menu"> <h1><img src="{{asset('assets/img/tutela.png')}}">TUTELA<img src="{{asset('assets/img/flechita.png')}}"></h1>
        <ul style="--cantidad-items:17">
            <li class="submenu"><a href="{{ route('tutelas.consultar','tutelas.consultartutela')}}"><h1>Consultar</h1></a></li>
            <li class="submenu"><a href="{{ route('tutelas.modificar','tutelas.modificartutela')}}"><h1>Modificar</h1></a></li>
            <li class="submenu"><a href=""><h1>Mandar Oficios</h1></a>
                <ul  style="--cantidad-items:7">
                    <li class="submenu1"><a href=""><h1>Ayuntamiento</h1></a>
                        <ul  style="--cantidad-items:2">
                            <li class="submenu2"><a href="{{ route('tutelas.oficios','tutelas.certificadobienes') }}"><h1>Certificado Bienes</h1></a></li>
                            <li class="submenu2"><a href="{{ route('tutelas.oficios','tutelas.informeayuntamiento') }}"><h1>Informe Ayuntamiento Servicios Sociales</h1></a></li>
                            
                        </ul>
                    </li>
                    <li class="submenu1"><a href="{{ route('tutelas.oficios','tutelas.pnc') }}"><h1>P.N.C</h1></a></li>
                    <li class="submenu1"><a href="{{ route('tutelas.oficios','tutelas.bancos') }}"><h1>Bancos</h1></a></li>
                    <li class="submenu1"><a href="{{ route('tutelas.oficios','tutelas.centros') }}"><h1>Centros</h1></a></li>
                    <li class="submenu1"><a href="{{ route('tutelas.oficios','tutelas.seguridadsocial') }}"><h1>Seguridad Social</h1></a></li>
                    <li class="submenu1"><a href="{{ route('tutelas.oficios','tutelas.juzgado') }}"><h1>Juzgado</h1></a></li>
                    <li class="submenu1"><a href="{{ route('tutelas.oficios','tutelas.autorizacioninternamiento') }}"><h1>Autorizacion Judicial Internamiento</h1></a></li>
                </ul>
            </li>
            <li class="submenu"><a href=""><h1>Inventarios</h1></a>
                <ul  style="--cantidad-items:3">
                    <li class="submenu1"><a href="{{ route('tutelas.inventarios','tutelas.invbienes') }}"><h1>De Bienes</h1></a></li>
                    <li class="submenu1"><a href="{{ route('tutelas.inventarios','tutelas.invinformeanual') }}"><h1>Informe Anual</h1></a></li>
                    <li class="submenu1"><a href="{{ route('tutelas.inventarios','tutelas.invfallecimiento') }}"><h1>Fallecimiento</h1></a></li>
                    
                    
                </ul>
            </li>
            
        </ul>
    </li>
    <li class="menu"> <h1><img src="{{asset('assets/img/curatela.png')}}"><img src="{{asset('assets/img/flechita.png')}}">CURATELA</h1>
        <ul  style="--cantidad-items:17">
            <li class="submenu"><a href="{{ route('curatelas.consultar','curatelas.consultarcuratela') }}"><h1>Consultar</h1></a></li>
            <li class="submenu"><a href="{{ route('curatelas.modificar','curatelas.modificarcuratela') }}"><h1>Modificar</h1></a></li>
            <li class="submenu"><a href=""><h1>Mandar Oficios</h1></a>
                <ul  style="--cantidad-items:7">
                    <li class="submenu1"><a href=""><h1>Ayuntamiento</h1></a>
                        <ul  style="--cantidad-items:2">
                            <li class="submenu2"><a href="{{ route('curatelas.oficios','curatelas.certificadobienes') }}"><h1>Certificado Bienes</h1></a></li>
                            <li class="submenu2"><a href="{{ route('curatelas.oficios','curatelas.informeayuntamiento') }}"><h1>Informe Ayuntamiento Servicios Sociales</h1></a></li>
                            
                        </ul>
                    </li>
                    <li class="submenu1"><a href="{{ route('curatelas.oficios','curatelas.pnc') }}"><h1>P.N.C</h1></a></li>
                    <li class="submenu1"><a href="{{ route('curatelas.oficios','curatelas.bancos') }}"><h1>Bancos</h1></a></li>
                    <li class="submenu1"><a href="{{ route('curatelas.oficios','curatelas.centros') }}"><h1>Centros</h1></a></li>
                    <li class="submenu1"><a href="{{ route('curatelas.oficios','curatelas.seguridadsocial') }}"><h1>Seguridad Social</h1></a></li>
                    <li class="submenu1"><a href="{{ route('curatelas.oficios','curatelas.juzgado') }}"><h1>Juzgado</h1></a></li>
                    <li class="submenu1"><a href="{{ route('curatelas.oficios','curatelas.autorizacioninternamiento') }}"><h1>Autorizacion Judicial Internamiento</h1></a></li>

                </ul></li>
            <li class="submenu"><a href=""><h1>Inventarios</h1></a>
                <ul  style="--cantidad-items:3">
                    <li class="submenu1"> <a href="{{ route('curatelas.inventarios','curatelas.invbienes') }}"><h1>De Bienes</h1></a></li>
                    <li class="submenu1"><a href="{{ route('curatelas.inventarios','curatelas.invinformeanual') }}"><h1>Informe Anual</h1></a></li>
                    <li class="submenu1"><a href="{{ route('curatelas.inventarios','curatelas.invfallecimiento') }}"><h1>Fallecimiento</h1></a></li>
                    
                    
                    
                </ul></li>
            
        </ul>
    </li>
    <li class="menu"> <h1><img src="{{asset('assets/img/administracionbien.png')}}">ADMINISTRADOR DE BIENES<img src="{{asset('assets/img/flechita.png')}}"></h1>
        <ul  style="--cantidad-items:17">
            <li class="submenu"><a href="{{ route('administracionbienes.consultar','administracionbienes.consultaradministracionbienes') }}"><h1>Consultar</h1></a></li>
            <li class="submenu"><a href="{{ route('administracionbienes.modificar','administracionbienes.modificaradministracionbienes') }}"><h1>Modificar</h1></a></li>
            <li class="submenu"><a href=""><h1>Mandar Oficios</h1></a>
                <ul style="--cantidad-items:7">
                    <li class="submenu1"><a href=""><h1>Ayuntamiento</h1></a>
                        <ul style="--cantidad-items:2">
                            <li class="submenu2"><a href="{{ route('administracionbienes.oficios','administracionbienes.certificadobienes') }}"><h1>Certificado Bienes</h1></a></li>
                            <li class="submenu2"><a href="{{ route('administracionbienes.oficios','administracionbienes.informeayuntamiento') }}"><h1>Informe Ayuntamiento Servicios Sociales</h1></a></li>
                            
                        </ul>
                    </li>
                    <li class="submenu1"><a href="{{ route('administracionbienes.oficios','administracionbienes.pnc') }}"><h1>P.N.C</h1></a></li>
                    <li class="submenu1"><a href="{{ route('administracionbienes.oficios','administracionbienes.bancos') }}"><h1>Bancos</h1></a></li>
                    <li class="submenu1"><a href="{{ route('administracionbienes.oficios','administracionbienes.centros') }}"><h1>Centros</h1></a></li>
                    <li class="submenu1"><a href="{{ route('administracionbienes.oficios','administracionbienes.seguridadsocial') }}"><h1>Seguridad Social</h1></a></li>
                    <li class="submenu1"><a href="{{ route('administracionbienes.oficios','administracionbienes.juzgado') }}"><h1>Juzgado</h1></a></li>
                    <li class="submenu1"><a href="{{ route('administracionbienes.oficios','administracionbienes.autorizacioninternamiento') }}"><h1>Autorizacion Judicial Internamiento</h1></a></li>

                </ul>
            </li>
            <li class="submenu"><a href=""><h1>Inventarios</h1></a>
                <ul style="--cantidad-items:3">
                    <li class="submenu1"><a href="{{ route('administracionbienes.inventarios','administracionbienes.invbienes') }}"><h1>De Bienes</h1></a></li>
                    <li class="submenu1"><a href="{{ route('administracionbienes.inventarios','administracionbienes.invinformeanual') }}"><h1>Informe Anual</h1></a></li>
                    <li class="submenu1"><a href="{{ route('administracionbienes.inventarios','administracionbienes.invfallecimiento') }}"><h1>Fallecimiento</h1></a></li>
                    
                    
                    
                </ul>
            </li>
            
        </ul>
    </li>
    <li class="menu"><a href="{{ route('index_apm') }}"><h1><img src="{{asset('assets/img/mantenimiento.png')}}">MANTENIMIENTO</h1></a></li>

    
</ul>


