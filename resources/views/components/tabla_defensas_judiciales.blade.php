@props (['expediente'])
@php
if ($expediente->defensasjudiciales){
    if(count($expediente->defensasjudiciales)>0)
      {
        $defensas=$expediente->defensasjudiciales; 
      }
      
}
@endphp


<table  cellspacing="0" cellpadding="8" border="0" align="center">
  <tbody>
      <tr>
          <td bgcolor="white" colspan="2">
              <font size="3" color="black" face="Arial">
                  <b>Defensas judiciales _________________________________</b>
              </font>
          </td>
      </tr>
      @if (count($expediente->defensasjudiciales)>0)
       
      @foreach($defensas as $defensa)
      <tr>
          <td width="45%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Fecha Aceptación </b>
              </font>
              <input id="fecha_aceptacion_dj" type="text" value="{{ $defensa->fecha_aceptacion?? '' }}" style="width:80;" maxlength="10" name="fecha_aceptacion_dj"></input>
              
            </td>
          <td width="55%" bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Fecha_cancelacion </b>
              </font>
              <input id="fecha_cancelacion_dj" type="text" value="{{ $defensa->fecha_cancelacion??'' }}" style="width:80;" maxlength="10" name="fecha_cancelacion_dj"></input>
          </td>

      </tr>
      <tr>
        <td width="20%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Estado: </b>
            </font>
            <input id="estado_dj" type="text" value="{{ $defensa->estados->nombre ??''}}" style="width:80;" maxlength="10" name="estado_dj"></input>
            
          </td>
        
          @if($defensa->estados->nombre=='BAJA')
          <td width="80%" bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Motivo Cancelacion </b>
            </font>
            <input id="motivo_cancelacion_dj" type="text"  value="{{ $defensa->motivos->nombre??'' }}" style="width:80;" maxlength="10" name="motivo_cancelacion_ab"></input>
          </td>
          @endif

    </tr>

    <tr>
      <td width="20%" bgcolor="#FFEBCD" align="left">
          <font size="2" color="black" face="Arial">
              <b>Letrado: </b>
          </font>
          <input id="letrado_dj" type="text" size="70" value="{{ $defensa->letrados->apellido1 ??'' }} {{ $defensa->letrados->apellido2 ??'' }},{{ $defensa->letrados->nombre ??''}} " style="width:80;" maxlength="100" name="letrado_dj"></input>
          
        </td>
      
        
        <td width="80%" bgcolor="#FFEBCD" align="left">
          <font size="2" color="black" face="Arial">
              <b>Juzgado </b>
          </font>
          <input id="juzgado_dj" type="text" size="<?php echo strlen($defensa->juzgados->nombre)+2;?>" value="{{ $defensa->juzgados->nombre??'' }}" style="width:80;" maxlength="10" name="juzgado_dj"></input>
        </td>
    </tr>
    <tr>
      <td bgcolor="white" colspan="2">
        
            <b>_________________________________</b>
        
    </td>
    </tr>
  
    @endforeach
    @else
                
                    <tr>
                        <td style="border:1px solid;  padding:12px; background-color: rgb(224, 204, 204)" >
                            
                            <label>NO HAY DATOS </label>
                        </td>

                    </tr>
    @endif
  </tbody>
</table>


