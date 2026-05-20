@props (['expediente'])


<table  cellspacing="0" cellpadding="8" border="0" align="center">
  <tbody>
      <tr>
          <td bgcolor="white" colspan="2">
              <font size="3" color="black" face="Arial">
                  <b>Reintegros  _________________________________</b>
              </font>
          </td>
      </tr>
      @if ($expediente->restituciones)
      <tr>
          <td width="33%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Fecha Restitucion </b>
              </font>
              <input id="fecha_restitucion" type="text" value="{{ date("d/m/Y",strtotime($expediente->restituciones->fecha_restitucion))?? '' }}" style="width:80;" maxlength="10" name="fecha_restitucion"></input>
              
            </td>
          <td width="33%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Fecha_Baja_ctaex </b>
              </font>
              <input id="fecha_baja_ctaex" type="text" value="{{ $expediente->restituciones->fecha_baja_ctaex??'' }}" style="width:80;" maxlength="10" name="fecha_baja_ctaex"></input>
          </td>

          <td width="34%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Restitucion: </b>
            </font>
            <input id="tipo_restitucion" type="text" value="{{ $expediente->restituciones->tiposrestituciones->nombre??'' }}" style="width:80;" maxlength="10" name="tipo_restitucion"></input>
        </td>
        <td width="20%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Regimen: </b>
            </font>
            <input id="regimen_restitucion" type="text" value="{{ $expediente->restituciones->regimenes->nombre ??''}}" style="width:80;" maxlength="10" name="regimen_restitucion"></input>
            
        </td>

      </tr>
      <tr>
        

        <td width="20%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Juzgado: </b>
            </font>
            <input id="juzgado_restitucion" type="text" value="{{ $expediente->restituciones->juzgados->nombre ??''}}" size="<?php echo strlen($expediente->restituciones->juzgados->nombre)??'';?>" name="juzgado_restitucion"></input>
            
        </td>
        <td width="20%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Figura: </b>
            </font>
            <input id="figura_restitucion" type="text" value="{{ $expediente->restituciones->figuras->nombre ??''}}" size="15" name="figura_retitucion"></input>
            
        </td>
        <td width="20%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Numero: </b>
            </font>
            <input id="numero_restitucion" type="text" value="{{ $expediente->restituciones->numero ??''}}"  size="3" name="numero_restitucion"></input>
            
        </td>
        <td width="20%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Año: </b>
            </font>
            <input id="año_restitucion" type="text" value="{{ $expediente->restituciones->años->nombre ??''}}" size="4" name="año_restitucion"></input>
            
        </td>
        
          

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

