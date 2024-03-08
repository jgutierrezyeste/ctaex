@props(['ruta'])
<table width="100%" border="0">
    <tbody>
        <tr>
            <td width="66%" align="center">
                <form method="GET" action="{{route($ruta) }}">
                    @csrf
                    <input type="submit" value = "VOLVER LISTADO " />
                </form>   
            </td>
            
        </tr>
    </tbody>
</table>