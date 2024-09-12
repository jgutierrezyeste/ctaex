@props(['titulo','subtitulo'=>'','ruta'=>'index_intranet'])
<table width="100%" border="0" align="center" margin-left="20%">
    <tbody>
        <tr>
            <td width="20%" align="left">
               
                <x-back_principal  :ruta="$ruta"></x-back_principal>
            </td>
            <td width="60%" align="center">
                <font size ="6" color="DarkOrange" >
                    <b> {{ $titulo }} </b>
                </font>
            </td>
            <td width="10%" align ="right">
                
                <x-cierre_sesion ruta="cerrar_sesion"></x-cierre_sesion>
            </td>
            <td width="10%" align ="right">
                
                <x-imprimir :ruta="$ruta"></x-imprimir>
            </td>
            
        </tr>
    </tbody>
</table>