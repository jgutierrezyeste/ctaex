@props (['expediente'])

<table  cellspacing="0" cellpadding="8" border="0" align="center">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >DATOS DE SEGUROS</b>
            </td>
        </tr>
        
        <tr>
            <td  style="border:1px solid; padding:2px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>SEGUROS MEDICOS _________________________________</b>
                    
                </font>
            </td>
        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)">
                
                <input class="inputtable" size="<?php echo strlen($expediente->datos_personales->nombre .'   '. $expediente->datos_personales->apellido1.'  ' . $expediente->datos_personales->apellido2)+2;?>" id="identificacion" type="text" value="{{ $expediente->datos_personales->nombre??''}}, {{$expediente->datos_personales->apellido1??''  }}  {{ $expediente->datos_personales->apellido2??'' }}"   name="identificacion"></input>
                <label>DNI </label>
                <input class="inputtable" id="dni" type="text" style="color:blue" value="{{ $expediente->datos_personales->numero_documento??'' }}"></input>
                <label>Fecha validez </label>
                <input class="inputtable" id="fecha_validez"  style="color:blue" value="{{ $expediente->datos_personales->fecha_caducidad_documento?date("d/m/Y",strtotime ($expediente->datos_personales->fecha_caducidad_documento)):'Sin datos' }}"></input>
                <label>Sexo </label>
                <input class="inputtable" size="<?php echo strlen($expediente->datos_personales->sexos->nombre);?>" id="sexo" type="text" style="color:blue" value="{{ $expediente->datos_personales->sexos->nombre }}"></input>
            </td>
        </tr>
        
        <tr>
            <td  style="border:1px solid; padding:2px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>SEGUROS DECESOS _________________________________</b>
                    
                </font>
            </td>
        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)">
                
                <input class="inputtable" size="<?php echo strlen($expediente->datos_personales->nombre .'   '. $expediente->datos_personales->apellido1.'  ' . $expediente->datos_personales->apellido2)+2;?>" id="identificacion" type="text" value="{{ $expediente->datos_personales->nombre??''}}, {{$expediente->datos_personales->apellido1??''  }}  {{ $expediente->datos_personales->apellido2??'' }}"   name="identificacion"></input>
                <label>DNI </label>
                <input class="inputtable" id="dni" type="text" style="color:blue" value="{{ $expediente->datos_personales->numero_documento??'' }}"></input>
                <label>Fecha validez </label>
                <input class="inputtable" id="fecha_validez"  style="color:blue" value="{{ $expediente->datos_personales->fecha_caducidad_documento?date("d/m/Y",strtotime ($expediente->datos_personales->fecha_caducidad_documento)):'Sin datos' }}"></input>
                <label>Sexo </label>
                <input class="inputtable" size="<?php echo strlen($expediente->datos_personales->sexos->nombre);?>" id="sexo" type="text" style="color:blue" value="{{ $expediente->datos_personales->sexos->nombre }}"></input>
            </td>
        </tr>
    </tbody>
</table>
