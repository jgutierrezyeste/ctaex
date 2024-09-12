@props (['ruta','vista','id','opcion'])
<tr  >
    <td class="tdmenulateral">
        <img width="10" height="10" src="{{asset('assets/img/bolita1.png')}}"></img>
    </td>
    <td class="tdmenulateral"   style= "align:left; " >
        
        <b><a style="text-decoration:none" href="{{ route($ruta,['vista'=>$vista,'id'=>$id]) }}"><h1 class="textomenulateral" >{{ $opcion }}</h1></a></b>
        
    </td>
</tr>
