<link rel="stylesheet" href="{{ asset('menu-submenus.css')}}">

<table class="menu_contenedor">
    <tr > 
        <td> <img src="{{asset('assets/img/expediente.png')}}"></td>
        <td class="menu"><h1>EXPEDIENTES</h1>
            <table>
                <tr class=class="submenu"><a href="{{ route('expedientes.index') }}"><h1>Indexar expediente</h1></a></tr>
                <tr class="submenu"><a href="{{ route('expedientes.create') }}"><h1>Iniciar Expedientes</h1></a></tr>
                <tr class="submenu"><a href="{{ route('expedientes.modificar','expedientes.editexpediente') }}"><h1>Modificar Expedientes</h1></a></tr>
                <tr class="submenu"><a href="{{ route('expedientes.consultar','expedientes.consultarexpediente') }}"><h1>Consultar Expedientes</h1></a></tr>
                <tr class="submenu"><a href=""><h1>Mandar oficios</h1></a>
                    <table>
                        <tr class="submenu1"><a href="{{ route('expedientes.oficios','expedientes.oficiostutor')}}"><h1>Acuerdo de Tutor</h1></a></tr>
                    <tr class="submenu1"><a href="{{ route('expedientes.oficios', 'expedientes.oficiosdefensorjudicial')}}"><h1>Acuerdo de Defensor Judicial</h1></a></tr>
                    <tr class="submenu1"><a href="{{ route('expedientes.oficios','expedientes.oficioscurador')}}"><h1>Acuerdo de Curador</h1></a></tr>
                    
                    </table>
                </tr>
    
            </table>    
        </td>
        <td><img src="{{asset('assets/img/flechita.png')}}"></td>
    </tr> 
        
    
</table>