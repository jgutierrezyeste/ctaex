@props(['titulo','subtitulo'=>'','ruta'=>'index_intranet'])
<table width="100%" border="0">
    <tbody>
        <tr>
            <td width="33%" align="left">
                   <x-back_principal  :ruta="$ruta"></x-back_principal>
            </td>
            <td align="center">
                <font size ="6" color="DarkOrange" >
                    <b> {{ $titulo }} </b>
                </font>
            </br>
                <font size ="5" color="DarkOrange" >
                    <b> {{ $subtitulo }} </b>
                </font>
            </td>
           
            <td width="33%"></td>
        </tr>
    </tbody>
</table>