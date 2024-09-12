@props (['expediente'])

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="8">
    
    
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
            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                
                
                <label>Provincia </label>
                <input class="inputtable" id="provincia" type="text" style="color:blue" value="{{ $expediente->datos_personales->domicilios->provincia??'Sin datos' }}"></input>
                <label>Localidad </label>
                <input class="inputtable" id="localidad" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->domicilios->localidad)+5;?>" value="{{ $expdatospersonales->domicilios->localidad??'sin datos' }}"></input>
            </td>
        </tr>
        <tr>
            <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
               
                <label>Direccion </label>
                <input class="inputtable" id="direccion" type="text" style="color:blue" value="{{ $expediente->datos_personales->domicilio->direccion??'Sin datos' }}"></input>
                <label>Codigo Postal </label>
                <input class="inputtable" id="codigo_postal" type="text" style="color:blue" value="{{ $expediente->datos_personales->domicilio->codigo_postal??'' }}"></input>
                
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
            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                
                
                <label>Nombre Centro </label>
                <input class="inputtable" id="centro" type="text" style="color:blue" size="<?php echo strlen($expediente->datos_personales->centros->nombre)+5;?>" value="{{ $expediente->datos_personales->centros->nombre??'Sin datos' }}"></input>
                <label>Cuota mensual </label>
                <input class="inputtable" id="cuota" type="text" style="color:blue" value=""></input>
            </td>
        </tr>
        <tr>
            <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
               
                <label>Nº cuenta bancaria </label>
                <input class="inputtable" id="direccion" type="text" style="color:blue" value="---"></input>
                
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