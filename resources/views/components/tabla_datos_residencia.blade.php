@props (['expediente'])

<table  cellspacing="0" cellpadding="8" border="0" align="center">
    
    
    <tbody>
       
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >DATOS RESIDENCIA</b>
            </td>
        </tr>
        
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Domicilio particular _________________________________</b>
                </font>
            </td>
        </tr>
        @if($expediente->datos_personales->domicilios)
        <tr>
        <td style="border:0px; border-left:1px solid;border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)" >
               
            <label>Tipo de vía</label>
            <input class="inputtable" id="tipo_via" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->domicilios->tipo_via);?>" value="{{ $expediente->datos_personales->domicilios->tipo_via??'' }}"  style="width:150;"  name="tipo_via"></input>
            <label>Direccion</label>
            <input class="inputtable" id="direccion" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->domicilios->direccion);?>"value="{{ $expediente->datos_personales->domicilios->direccion??'' }}"  style="width:150;"  name="direccion"></input>
            <label>Numero</label>
            <input class="inputtable" id="numero" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->domicilios->numero);?>"value="{{ $expediente->datos_personales->domicilios->numero??'' }}"  style="width:150;"  name="numero"></input>
            <label>Planta</label>
            <input class="inputtable" id="planta" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->domicilios->planta);?>"value="{{ $expediente->datos_personales->domicilios->planta??'' }}"  style="width:150;"  name="planta"></input>
            <label>Puerta</label>
            <input class="inputtable" id="puerta" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->domicilios->puerta);?>"value="{{ $expediente->datos_personales->domicilios->puerta??'' }}"  style="width:150;"  name="puerta"></input>
        </td>
        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid;border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)" >    
            <label>Localidad </label>
            <input class="inputtable" id="localidad" type="text"  style="color:blue" value="{{ $expediente->datos_personales->domicilio_id?$expediente->datos_personales->domicilios->localidad:'Sin datos' }}" style="width:150;"  name="localidad"></input>
            <label>Provincia</label>
            <input class="inputtable" id="provincia" type="text"  style="color:blue" value="{{ $expediente->datos_personales->domicilio_id?$expediente->datos_personales->domicilios->provincias->nombre:'Sin datos' }}" style="width:150;"  name="provincia"></input>

            <label>Codigo postal </label>
            <input class="inputtable" id="codigo_postal" type="text"  style="color:blue" value="{{ $expediente->datos_personales->domicilio_id?$expediente->datos_personales->domicilios->codigo_postal:'Sin datos' }}" style="width:150;"  name="codigo_postal"></input>

            </td>
        </tr>

        
            
        @else
        <tr>
            <td style="border:1px solid;  padding:12px; background-color: rgb(224, 204, 204)"  >
               <label>NO HAY DATOS</label>
            </td>

        </tr>
        @endif
       
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Centro _________________________________</b>
                </font>
            </td>
        </tr>
        @if ($expediente->datos_personales->centros)
        <tr>
            <td style="border:0px; border-left:1px solid;border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)" >
                   
                <label>Nombre del centro</label>
                <input class="inputtable" id="nombre_centro" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->centros->nombre);?>"value="{{$expediente->datos_personales->centros->nombre??'sin datos' }}"  style="width:150;"  name="nombre_centro"></input>
            </br>
                  
                <label>Tipo de vía</label>
                <input class="inputtable" id="tipo_via" type="text" style="color:blue" value="{{$expediente->datos_personales->centros->vias->nombre}}"  style="width:150;"  name="tipo_via"></input>
                <label>Direccion</label>
                <input class="inputtable" id="direccion" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->centros->direccion);?>"value="{{ $expediente->datos_personales->centros->direccion??'' }}"  style="width:150;"  name="direccion"></input>
                <label>Numero</label>
                <input class="inputtable" id="numero" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->centros->numero);?>"value="{{ $expediente->datos_personales->centros->numero??'' }}"  style="width:150;"  name="numero"></input>
                <label>Planta</label>
                <input class="inputtable" id="planta" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->centros->planta);?>"value="{{ $expediente->datos_personales->centros->planta??'' }}"  style="width:150;"  name="planta"></input>
                <label>Puerta</label>
                <input class="inputtable" id="puerta" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->centros->puerta);?>"value="{{ $expediente->datos_personales->centros->puerta??'' }}"  style="width:150;"  name="puerta"></input>
            </td>
        </tr>
        <tr>
            <td style="border:0px solid; border-left:1px solid;border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)" >    
                <label>Teléfono </label>
                <input class="inputtable" id="telefono" type="text"  style="color:blue" value="{{$expediente->datos_personales->centros->telefono }}" style="width:150;"  name="telefono"></input>
                <label>Telefono2</label>
                <input class="inputtable" id="telefono2" type="text"  style="color:blue" value="{{$expediente->datos_personales->centros->telefono2 }}" style="width:150;"  name="telefono2"></input>
    
                <label>Fax </label>
                <input class="inputtable" id="fax" type="text"  style="color:blue" value="{{$expediente->datos_personales->centros->fax }}" style="width:150;"  name="fax"></input>
                <label>Fax2 </label>
                <input class="inputtable" id="fax2" type="text"  style="color:blue" value="{{$expediente->datos_personales->centros->fax2 }}" style="width:150;"  name="fax2"></input>
    

            </td>
        </tr>
        <tr>
            <td style="border:0px solid; border-left:1px solid;border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)" >    
                <label>Correo electrónico </label>
                <input class="inputtable" id="localidad" type="text"  style="color:blue" size="<?php echo strlen($expediente->datos_personales->centros->correo_electronico);?>" value="{{$expediente->datos_personales->centros->correo_electronico }}" style="width:150;"  name="correo_electronico"></input>
                <label>Observaciones</label>
                <input class="inputtable" id="provincia" type="text"  style="color:blue" value="{{$expediente->datos_personales->centros->observaciones }}" style="width:150;"  name="observaciones"></input>
    
            </td>
        </tr>
        <tr>
            <td style="border:1px solid; border-top:0px ;border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)" >    
                <label>Localidad </label>
                <input class="inputtable" id="localidad" type="text"  style="color:blue" value="{{$expediente->datos_personales->centros->poblacion }}" style="width:150;"  name="localidad"></input>
                <label>Provincia</label>
                <input class="inputtable" id="provincia" type="text"  style="color:blue" value="{{$expediente->datos_personales->centros->provincias->nombre }}" style="width:150;"  name="provincia"></input>
    
                <label>Codigo postal </label>
                <input class="inputtable" id="codigo_postal" type="text"  style="color:blue" value="{{$expediente->datos_personales->centros->codigo_postal }}" style="width:150;"  name="codigo_postal"></input>
    
            </td>
        </tr>
    
        @else
        <tr>
            <td style="border:1px solid;  padding:12px; background-color: rgb(224, 204, 204)"  >
               
                <label>NO HAY DATOS</label>
                
                
            </td>

        </tr>
        @endif
      
    </tbody>
</table>