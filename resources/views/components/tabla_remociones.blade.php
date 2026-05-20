@props (['expediente'])
@php
if ($expediente->remociones){
    if(count($expediente->remociones->representantesremocion)>0)
      {
        $repres=$expediente->remociones->representantesremocion; 
      }
       
    }

@endphp


<table  cellspacing="0" cellpadding="8" border="0" align="center">
  <tbody>
      <tr>
          <td bgcolor="white" colspan="2">
              <font size="3" color="black" face="Arial">
                  <b>Remociones _________________________________</b>
              </font>
          </td>
      </tr>
      @if ($expediente->remociones)
      <tr>
          <td width="33%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Fecha Aceptación Cargo </b>
              </font>
              <input id="fecha_aceptacion_cargo_remocion" type="text" value="{{ $expediente->remociones->fecha_acep_cargo?? '' }}"  name="fecha_aceptacion_cargo_remocion"></input>
              
            </td>
          <td width="33%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Fecha_remocion </b>
              </font>
              <input id="fecha_remocion" type="text" value="{{ $expediente->remociones->fecha_remocion??'' }}"   name="fecha_remocion"></input>
          </td>
          <td width="33%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Regimen: </b>
            </font>
            <input id="regimen_remocion" type="text" value="{{ $expediente->remociones->regimen ??''}}"  name="regimen_remocion"></input>
            
          </td>

      </tr>
      @if($repres)
            @foreach($repres as $repre)
              <tr>
                
              
                <td width="20%" bgcolor="#FFEBCD" align="left">
                    <font size="2" color="black" face="Arial">
                        <b>Representante remocion: </b>
                    </font>
                    <input id="representante_remocion" type="text" size="70" value="{{ $repre->nombre??'' }} {{ $repre->apellido1 }} {{ $repre->apellido2 }}  " style="width:80;" maxlength="100" name="representante_remocion"></input>
                    
                </td>

                <td width="10%" bgcolor="#FFEBCD" align="left">
                  <font size="2" color="black" face="Arial">
                      <b>Relacion: </b>
                  </font>
                  <input id="relacion_remocion" type="text" size="70" value="{{ $repre->pivot->relacion_id }}  " style="width:80;" maxlength="50" name="relacion_remocion"></input>
                  
                </td>
                
                  
              </tr>
            @endforeach
      @endif
      <tr>
            <td bgcolor="white" colspan="2">
              
                  <b>_________________________________</b>
              
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

