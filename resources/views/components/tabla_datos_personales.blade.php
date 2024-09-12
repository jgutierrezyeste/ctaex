@props (['expediente'])

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="8">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >DATOS PERSONALES</b>
            </td>
        </tr>
        
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Datos Personales _________________________________</b>
                </font>
            </td>
        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                
                <input class="inputtable" size="<?php echo strlen($expediente->datos_personales->nombre .'   '. $expediente->datos_personales->apellido1.'  ' . $expediente->datos_personales->apellido2)+2;?>" id="identificacion" type="text" value="{{ $expediente->datos_personales->nombre??''}}, {{$expediente->datos_personales->apellido1??''  }}  {{ $expediente->datos_personales->apellido2??'' }}"   name="identificacion"></input>
                <label>DNI </label>
                <input class="inputtable" id="dni" type="text" style="color:blue" value="{{ $expediente->datos_personales->numero_documento??'' }}"></input>
                <label>Fecha incapacitacion </label>
                <input class="inputtable" id="fecha_incapacitacion" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input>
            </td>

        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid;border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)" >
                <label>Fecha Tutela </label>
                <input class="inputtable" id="fecha_tutela" type="date" style="color:blue" value="{{ $expediente->fecha_aceptacion_cargo ?date("d/m/Y",strtotime ($expediente->fecha_aceptacion_cargo)):'Sin datos' }}" style="width:150;"  name="fecha_tutela"></input>
                <label>Fecha Aceptacion </label>
                <input class="inputtable" id="fecha_aceptacion" type="date"  style="color:blue" value="{{$expediente->fecha_aceptacion_cargo ?date("d/m/Y",strtotime ($expediente->fecha_aceptacion_cargo)):'Sin datos' }}" style="width:150;"  name="fecha_aceptacion"></input>
                <label>Seguro Defuncion </label>
                <input class="inputtable" id="seguro_defuncion" type="text"  style="color:blue" value="{{ $expediente->gestionsegurodecesos->segurosdecesos->aseguradoras->nombre??'Sin datos'}}" style="width:150;"  name="seguro_defuncion"></input>

            </td>

        </tr>
        
        
        <tr>
            <td style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Datos Nacimiento _________________________________</b>
                </font>
            </td>
        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid; border-right:1px solid;padding:12px; background-color: rgb(224, 204, 204)" >
                <label>Provincia </label>
                <input class="inputtable" id="provincia" type="text" style="color:blue" value="{{ $expediente->provincia??'Sin Datos'}}" style="width:150;"  name="provincia"></input>
                
                <label>Localidad</label>
                <input class="inputtable" id="Localidad" type="text"  style="color:blue" value="{{ $expediente->provincia??'Sin Datos' }}"></input>
            </td>
        </tr>
        <tr>
            <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >   
                <label>Fecha nacimiento</label>
                <input class="inputtable" id="fecha_nacimiento" type="date" style="color:blue" value="{{ $expediente->datos_personales->fecha_nacimiento ?date("d/m/Y",strtotime ($expediente->datos_personales->fecha_nacimiento)):'Sin datos' }}"></input>

            </td>

        </tr>
    </tbody>
</table>
