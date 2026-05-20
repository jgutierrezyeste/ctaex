@props (['expediente'])


<table  cellspacing="0" cellpadding="8" border="0" align="center">
  <tbody>
      <tr>
          <td bgcolor="white" colspan="2">
              <font size="3" color="black" face="Arial">
                  <b>Administracion bienes _________________________________</b>
              </font>
          </td>
      </tr>
      @if ($expediente->administraciones)
      <tr>
          <td width="45%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Fecha Aceptación </b>
              </font>
              <input id="fecha_aceptacion_ab" type="text" value="{{ date("d/m/Y",strtotime($expediente->administraciones->fecha_aceptacion))?? '' }}" style="width:80;" maxlength="10" name="fecha_aceptacion_ab"></input>
              
            </td>
          <td width="55%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Fecha_cancelacion </b>
              </font>
              <input id="fecha_cancelacion_ab" type="text" value="{{ $expediente->administraciones->fecha_cancelacion??'' }}" style="width:80;" maxlength="10" name="fecha_cancelacion_ab"></input>
          </td>

      </tr>
      <tr>
        <td width="20%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Estado: </b>
            </font>
            <input id="estado_ab" type="text" value="{{ $expediente->administraciones->estados->nombre ??''}}" style="width:80;" maxlength="10" name="estado_ab"></input>
            
          </td>
        
          @if($expediente->administraciones->estados->nombre=='BAJA')
          <td width="80%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Motivo Cancelacion </b>
            </font>
            <input id="motivo_cancelacion_ab" type="text" size="<?php echo strlen($expediente->administraciones->motivoscancelacion->nombre)+2;?>" value="{{ $expediente->administraciones->motivoscancelacion->nombre??'' }}" style="width:80;" maxlength="10" name="motivo_cancelacion_ab"></input>
          </td>
          @endif

    </tr>
    @else
                
                    <tr>
                        <td style="border:1px solid;  padding:12px; background-color: rgb(224, 204, 204)" >
                            
                            <label>NO HAY DATOS </label>
                        </td>

                    </tr>
                 @endif

  </tbody>
</table>

