@props (['expediente'])

<table  cellspacing="0" cellpadding="8" border="0" align="center">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >DATOS PERSONALES</b>
            </td>
        </tr>
        
        <tr>
            <td  style="border:1px solid; padding:2px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Datos Personales _________________________________</b>
                    
                </font>
            </td>
        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)">
                
                <input class="inputtable" size="<?php echo strlen($expediente->datos_personales->nombre .'   '. $expediente->datos_personales->apellido1.'  ' . $expediente->datos_personales->apellido2)+2;?>" id="identificacion" type="text" value="{{ $expediente->datos_personales->nombre??''}}, {{$expediente->datos_personales->apellido1??''  }}  {{ $expediente->datos_personales->apellido2??'' }}"   name="identificacion"></input>
                </br>
                </br>
                <label>Tipo Documento </label>
                <input class="inputtable" id="tipo_documento" type="text" style="color:blue" value="{{ $expediente->datos_personales->tipodocumentos->nombre??'' }}"></input>
                <label>Numero </label>
                <input class="inputtable" id="numero" type="text" style="color:blue" value="{{ $expediente->datos_personales->numero_documento??'' }}"></input>
                
                <label>Fecha validez </label>
                <input class="inputtable" id="fecha_validez"  style="color:blue" value="{{ $expediente->datos_personales->fecha_caducidad_documento?date("d/m/Y",strtotime ($expediente->datos_personales->fecha_caducidad_documento)):'Sin datos' }}"></input>
                <label>Sexo </label>
                <input class="inputtable" size="<?php echo strlen($expediente->datos_personales->sexos->nombre);?>" id="sexo" type="text" style="color:blue" value="{{ $expediente->datos_personales->sexos->nombre }}"></input>
            </td>

        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid;border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)" >
                <label>Num.Seg.Social </label>
                <input class="inputtable" id="seguridad_social" type="text" style="color:blue" value="{{ $expediente->datos_personales->seg_social ?$expediente->datos_personales->seg_social:'Sin datos' }}" style="width:150;"  name="seguridad_social"></input>
                <label>Fecha_nacimiento </label>
                <input class="inputtable" id="fecha_nacimiento" type="text"  style="color:blue" value="{{ $expediente->datos_personales->fecha_nacimiento?date("d/m/Y",strtotime ($expediente->datos_personales->fecha_nacimiento)):'Sin datos' }}" style="width:150;"  name="fecha_nacimiento"></input>
                <label>Nacionalidad </label>
                <input class="inputtable" id="nacionalidad" type="text"  style="color:blue" value="{{ $expediente->datos_personales->nacionalidad_id?$expediente->datos_personales->nacionalidades->nombre:'Sin datos' }}" style="width:150;"  name="fecha_nacimiento"></input>

            </td>

        </tr>

        <tr>
            <td style="border:0px; border-left:1px solid;border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)" >
                <label>Domicilio </label>
                @if($expediente->datos_personales->domicilio_id)    
             
                    <input class="inputtable" id="domicilio" type="text" style="color:blue" value="{{ $expediente->datos_personales->domicilios->tipo_via??'' }} {{ $expediente->datos_personales->domicilios->direccion??'' }} {{ $expediente->datos_personales->domicilios->numero??'' }} {{ $expediente->datos_personales->domicilios->planta??'' }} {{ $expediente->datos_personales->domicilios->puerta??'' }}" style="width:150;"  name="domicilio"></input>
                
                @else
                    <input class="inputtable" id="domicilio" type="text" style="color:blue" value="sin datos" style="width:150;"  name="domicilio"></input>

                @endif
                 

                <label>Localidad </label>
                <input class="inputtable" id="localidad" type="text"  style="color:blue" value="{{ $expediente->datos_personales->domicilio_id?$expediente->datos_personales->domicilios->localidad:'Sin datos' }}" style="width:150;"  name="localidad"></input>
                <label>Provincia</label>
                <input class="inputtable" id="provincia" type="text"  style="color:blue" value="{{ $expediente->datos_personales->domicilio_id?$expediente->datos_personales->domicilios->provincias->nombre:'Sin datos' }}" style="width:150;"  name="provincia"></input>

                <label>Codigo postal </label>
                <input class="inputtable" id="codigo_postal" type="text"  style="color:blue" value="{{ $expediente->datos_personales->domicilio_id?$expediente->datos_personales->domicilios->codigo_postal:'Sin datos' }}" style="width:150;"  name="codgio_postal"></input>

            </td>

        </tr>
        
        
        
        <tr>
            <td style="border:1px solid;  border-top:0px solid;padding:2px; background-color: rgb(224, 204, 204)" >
                <label>Telefono </label>
                <input class="inputtable" id="telefono" type="text" style="color:blue" value="{{ $expediente->datos_personales->telefono??'Sin Datos'}}" style="width:150;"  name="telefono"></input>
                
                <label>Correo_electrónico</label>
                <input class="inputtable" id="correo_electronico" type="text"  style="color:blue" value="{{ $expediente->datos_personales->correo_electronico??'Sin Datos' }}"></input>
        
                <label>Fecha fallecimiento</label>
                <input class="inputtable" id="fecha_fallecimiento" type="text"  style="color:blue" value="{{ $expediente->datos_personales->fecha_fallecimiento?date("d/m/Y",strtotime ($expediente->datos_personales->fecha_fallecimiento)):'Sin datos' }}" style="width:150;"  name="fecha_fallecimiento"></input>

            </td>

        </tr>
    </tbody>
</table>
