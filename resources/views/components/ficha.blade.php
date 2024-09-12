@props (['expediente','tipoficha'])

<table class="tableficha" cellspacing="0" cellpadding="8"  >
    
    <tbody style="align:right ;background-color:white">
        <tr>
            <td  style="padding:2px"   colspan="2" align="left">                
                    <b style="color:orange; face:Arial,Helvetica">FICHA DE LA {{ strtoupper($tipoficha) }}</b>
               
            </td>
        </tr>
        <tr>
            <td style=" padding:4px; padding-left:20px " colspan="2">
                
                    <b >{{ $tipoficha }} Número: <b style ="color:red">{{ $expediente->expte }} - {{ $expediente->datos_personales->apellido1 }} {{ $expediente->datos_personales->apellido2 }}, {{ $expediente->datos_personales->nombre }}   ({{ $expediente->datos_personales->sexos->nombre }})</b></b>
                
            </td>
        </tr>
        
        <tr>
            <td style="padding:4px; padding-left:20px"colspan="2">
                
                    <b color="black">Regimen inicial: <b style="color:red">{{ $expediente->regimen }} </b></b>
                
            </td>
        </tr>
        <tr>
            <td style=" padding:4px; padding-left:20px" colspan="2">
                
                    <b>Entrada en la Junta: <b style="color:red">{{ $expediente->fecha_entrada_area_aecca ?date("d/m/Y",strtotime ($expediente->fecha_entrada_area_aecca)):'No consta' }}  <b style="color:black">Propuesta Aceptación : <b style="color:red">{{ $expediente->fecha_aceptacion_cargo ?date("d/m/Y",strtotime ($expediente->fecha_aceptacion_cargo)):'No consta' }}</b></b></b></b>
            </td>
        </tr>
        <tr>
            <td style=" padding:4px; padding-left:20px" colspan="2">
                                
                    <b>Remisión Gabinete: <b style="color:red">{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'No consta' }}  <b style="color:black">Recibimos Gabinete : <b style="color:red">{{ $expediente->fecha_aceptacion_cargo ?date("d/m/Y",strtotime ($expediente->fecha_aceptacion_cargo)):'No consta' }}</b></b></b></b>
                
            </td>
        </tr>
    </tbody>
</table>