@props (['tipo'=>'columna_resultado','campo','expediente'])

<td class="{{ $tipo }}"><a href=""><img src="{{asset('assets/img/lupa.png')}}" align="left"></a><a href="">{{ $expediente->$campo??'Sin datos' }}</a></td>
