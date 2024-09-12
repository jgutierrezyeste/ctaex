@props(['ruta'])
    <!--<div  align="center">
    <a href="{{route($ruta)}}">
    <img src="{{asset('assets/img/boton_añadir.png')}}" alt="40" width="40" >
    </a>
    </div>-->
   <table class="botonaniadir" width="15%" border="0" align="right">
    <tbody>
        <tr>
            <td width="66%" align="center">
                <form method="GET" action="{{route($ruta) }}">
                    @csrf
                    
                    <abbr title="Añadir nuevo">
                        <button type="submit" value = "AÑADIR NUEVO " style= "cursor: hand;" > 
                        
                        <img src="{{asset('assets/img/boton_añadir.png')}}" alt="40" width="40">
                        </button>
                    </abbr>
                    
                </form>   
            </td>
            
        </tr>
    </tbody>
</table>