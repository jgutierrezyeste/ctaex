
@props (['tipo'=>'columna_resultado','campo','expediente'])
<td class="{{ $tipo }}">{{ $expediente->$campo??'Sin datos'}} </td>