@props (['expediente'])

<!--<table  class="tablegeneral" style="margin-left:10%; width:auto" cellspacing="0" cellpadding="8">
    
    
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
                <label>DNI </label>
                <input class="inputtable" id="dni" type="text" style="color:blue" value="{{ $expediente->datos_personales->numero_documento??'' }}"></input>
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
-->
<table  cellspacing="0" cellpadding="8" border="0" align="center">
                   
    <tbody>
      <tr>
          <td  bgcolor="white">
            
            <font align="3" face="Arial" color="black" size="3">
            <br>
            <b>Expediente __________________________________________________</b>	            
            </font>
          </td>
      </tr>

      <tr>
          <td align="left" bgcolor="#FFEBCD" width="33%">			
            <font face="Arial" color="black" size="2">
              <b>&nbsp;Nº Expediente &nbsp;</b>            
            </font>          
            <font face="Arial" color="red" size="2">
              <input id="num_expte_intranet" type="text" value="{{ $expediente->num_expte_intranet??'' }}" style="width:80;" maxlength="10" name="num_expte_intranet"></input>          
            </font>
          </td>	
          <td align="left" bgcolor="#FFEBCD" width="33%">	
            <font face="Arial" color="black" size="2">
              <b>&nbsp;Régimen Inicial&nbsp;</b> 
            </font>
            <input id="regimen" type="text" value="{{ $expediente->regimen??'' }}" style="width:80;" maxlength="10" name="regimen"></input>        
          </td>	
          <td align="left" bgcolor="#FFEBCD" width="33%"></td>
      </tr>
      <tr>
          <td align="left" bgcolor="#FFEBCD" width="33%">			
            <font face="Arial" color="black" size="2">
              <b>&nbsp;Nº Expediente Actual&nbsp;</b>            
            </font>          
            <font face="Arial" color="red" size="2">
              <input id="expte"  type="text" value="{{ $expediente->expte??'' }}" style="width:80;" maxlength="15" name="expte"></input>          
            </font>
          </td>	
          <td align="left" bgcolor="#FFEBCD" width="33%">	
            <font face="Arial" color="black" size="2">
              <b>&nbsp;Régimen Actual&nbsp;</b> 
            </font>
            <input id="regimen_actual" type="text" value="{{ $expediente->regimen_actual??'' }}" style="width:80;" maxlength="10" name="regimen_actual"></input>        
          </td>	
          <td align="left" bgcolor="#FFEBCD" width="33%"></td>
      </tr>
      <tr>
          <td bgcolor="white" colspan="2" >
              <font size="3" color="black" face="Arial">
              <br>
                  <b>Datos Personales _________________________________</b>
              </font>
          </td>
    </tr>
    <tr>
          <td width="33%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Nombre </b>
              </font>
              <input id="nombre" type="text" value="{{ $expediente->datos_personales->nombre??''}}" style="width:150;"  name="nombre"></input>
          </td>
          <td width="33%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Apellidos </b>
              </font>
              <input id="apellidos" type="text" value="{{ $expediente->datos_personales->apellido1??''}} {{ $expediente->datos_personales->apellido2??'' }}" style="width:250;" name="apellidos"></input>
          </td>
          <td width="33%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Sexo </b>
            </font>
            <input id="sexo" type="text" value="{{ $expediente->datos_personales->sexos->nombre??''}}" style="width:50;" name="sexo"></input>
          </td>
    </tr>
    <tr>
        <td colspan="3" bgcolor="white">	       

          <font colspan="3" face="Arial" color="black" size="3">
            <br>
            <b>Juzgado _____________________________________________________</b>			      
          </font>			
        </td>
   </tr>
   <tr>
      <td align="left" bgcolor="#FFEBCD" width="33%">  			
          <font face="Arial" color="black" size="2">
              <b>&nbsp;Procedimiento</b>
          </font>        		
          <input id="tipo_procedimiento" type="text" value="{{ $expediente->num_incapacidad??'' }}  {{ $expediente->procedimientosjudiciales->nombre??'' }}"  name="tipo_procedimiento"></input>

        </td>	
      <td align="left" bgcolor="#FFEBCD" width="33%"></td>
      <td align="left" bgcolor="#FFEBCD" width="33%"></td>

   </tr>  
   <tr> 
      <td  align="left" bgcolor="#FFEBCD" width="33%">		  
        <font face="Arial" color="black" size="2">
          <b>&nbsp;Juzgado</b>
        </font>
        <input id="juzgado" type="text" value="{{ $expediente->juzgados->nombre??''}}"  style="width:50%;" name="juzgado"></input></td>
        </td>
      <td align="left" bgcolor="#FFEBCD" width="33%"></td>
      <td align="left" bgcolor="#FFEBCD"width="33%"></td>
    </tr>
    <tr>
      <td  align="left" bgcolor="#FFEBCD" width="33%">		  
        <font face="Arial" color="black" size="2">
         <b>&nbsp;Provincia</b>
        </font>
        <input id="provincia" type="text" value="{{ $expediente->juzgados->provincias->nombre??''}}" style="width:50;" name="provincia"></input></td>
       </td>
       <td  align="left" bgcolor="#FFEBCD" width="33%">		  
        <font face="Arial" color="black" size="2">
         <b>&nbsp;Poblacion</b>
        </font>
        <input id="poblacion" type="text" value="{{ $expediente->juzgados->localidad??''}}" style="width:50;" name="poblacion"></input></td>
       </td>
       <td  align="left" bgcolor="#FFEBCD" width="33%">		  
        <font face="Arial" color="black" size="2">
         <b>&nbsp;Codigo Postal</b>
        </font>
        <input id="codigo_postal" type="text" value="{{ $expediente->juzgados->codigo_postal??''}}" style="width:50;" name="codigo_postal"></input></td>
       </td>
     
    </tr>
    <tr>
    </tr>

    </tbody>
</table>
  

  



