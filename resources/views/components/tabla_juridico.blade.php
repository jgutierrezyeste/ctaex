@props (['expediente'])
@php
$archivo=fopen("rendiciones.txt","w+");
    $rendiciones= $expediente->rendicionestotales;
    fwrite($archivo,print_r($rendiciones,true));
 
@endphp

<table  cellspacing="0" cellpadding="8" border="0" align="center">
  <tbody>
      <tr>
          <td bgcolor="white" >
              <font align="3" size="3" color="black" face="Arial">
                <br>
                  <b>Datos generales _________________________________</b>
              </font>
          </td>
      </tr>
      
      <tr>
          <td  bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Expediente </b>
              </font>
              <input id="expediente" type="text" value="{{$expediente->expte?? '' }} -- {{ $expediente->num_expte_intranet }}" style="width:80;" maxlength="10" name="expediente"></input>
              
            </td>
          <td  bgcolor="#FFEBCD" align="left">
              <font size="2" color="black" face="Arial">
                  <b>Situacion </b>
              </font>
              <input id="estado" type="text" value="{{ $expediente->estados->nombre??'' }}" style="width:80;" maxlength="10" name="estado"></input>
          </td>

          <td  bgcolor="#FFEBCD" align="left">
            <font size="2" color="black" face="Arial">
                <b>Procedimiento </b>
            </font>
            <input id="procedimiento" type="text" value="{{ $expediente->procedimientosjudiciales->nombre??'' }}" style="width:80;" maxlength="10" name="procedimientos"></input>
            </td>

        </tr>
        <tr>
            <td width="33%" bgcolor="#FFEBCD" align="left">
                <font size="2" color="black" face="Arial">
                    <b>Juzgado: </b>
                </font>
                <input id="juzgado" type="text" value="{{ $expediente->juzgados->nombre ??''}}" style="width:80;" maxlength="10" name="juzgado"></input>
                
            </td>
            
            <td width="33%" bgcolor="#FFEBCD" align="left">
                <font size="2" color="black" face="Arial">
                    <b>Numero: </b>
                </font>
                <input id="numero_procedimiento" type="text" value="{{ $expediente->num_incapacidad ??''}}" style="width:80;" maxlength="10" name="numero_procedimiento"></input>
                
            </td>

            <td width="33%" bgcolor="#FFEBCD" align="left">
                <font size="2" color="black" face="Arial">
                    <b>NIG: </b>
                </font>
                <input id="nig" type="text" value="{{ $expediente->nig??''}}" style="width:80;" maxlength="10" name="nig"></input>
                
            </td>
            

        </tr>
    </br>
    @if($rendiciones)
        @foreach ($rendiciones as $rendicion)
            @if ($rendicion->tipo=='INICIAL')    
                <tr>
                    <td bgcolor="white" >
                        <font align="3" size="3" color="black" face="Arial">
                            <b>Inventario _________________________________</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Empleado ECCa </b>
                        </font>
                        <input id="empleado_inventario" type="text" value="" style="width:80;" maxlength="10" name="empleado_inventario"></input>
                        
                    </td>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Aceptacion Cargo </b>
                        </font>
                        <input id="fecha_aceptacion_cargo" type="text" value="{{ $rendicion->rendicionesiniciales->fecha_aceptacion_cargo??'sin datos' }}" style="width:80;" maxlength="10" name="fecha_aceptacion_cargo"></input>
                    </td>

                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Entrada area ECCA </b>
                        </font>
                        <input id="fecha_entrada_ecca" type="text" value="{{ $rendicion->rendicionesiniciales->fecha_entrada??'sin datos' }}" style="width:80;" maxlength="10" name="fecha_entrada_ecca"></input>
                    </td>

                </tr>        
                
                
                
                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Presentacion juzgado </b>
                        </font>
                        <input id="fecha_presentacion_inventario" type="text" value="{{ $rendicion->fecha_presentacion }}" style="width:80;" maxlength="10" name="fecha_presentacion_inventario"></input>
                    </td>
                    
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Aprobacion juzgado</b>
                        </font>
                        <input id="fecha_aprobacion_inventario" type="text" value="{{ $rendicion->fecha_aprobacion }}" style="width:80;" maxlength="10" name="fecha_aprovacion_inventario"></input>
                        
                    </td>
                    

                    <td width="33%" bgcolor="#FFEBCD" align="left">
                    </td>
                
                </tr>

                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Observaciones </b>
                        </font>
                        <input id="observaciones_inventario" type="text" value="{{ $rendicion->observaciones }}" style="width:80;" maxlength="10" name="observaciones_inventario"></input>
                    </td> 
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                    </td>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                    </td>
                </tr>
            @elseif($rendicion->tipo=='ANUAL')
            </br>
                <tr>
                    <td bgcolor="white" >
                        <font align="3" size="3" color="black" face="Arial">
                            <b>Rendiciones anuales _________________________________</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Empleado </b>
                        </font>
                        <input id="empleado_rdc_anual" type="text" value="" style="width:80;" maxlength="10" name="empleado_rdc_anual"></input>
                        
                    </td>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Años inventario </b>
                        </font>
                        <input id="años_inventario" type="text" value="" style="width:80;" maxlength="10" name="años_inventario"></input>
                    </td>

                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Presentar rendicion </b>
                        </font>
                        <input id="is_rendicion" type="text" value="{{ $rendicion->rendicionesanuales->is_rendicion=='1'?'SI':'NO' }}" style="width:80;" maxlength="10" name="is_rendicion"></input>
                    </td>

                </tr>        

                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Presentacion juzgado </b>
                        </font>
                        <input id="fecha_presentacion_rdc_anual" type="text" value="{{ $rendicion->fecha_presentacion }}" style="width:80;" maxlength="10" name="fecha_presentacion_rdc_anual"></input>
                    </td>
                    
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Aprobacion juzgado</b>
                        </font>
                        <input id="fecha_aprobacion_rdc_anual" type="text" value="{{ $rendicion->fecha_aprobacion }}" style="width:80;" maxlength="10" name="fecha_aprobacion_rdc_anual"></input>
                        
                    </td>
                    

                    <td width="33%" bgcolor="#FFEBCD" align="left">
                    </td>
                </tr>

                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Declaracion anual </b>
                        </font>
                        @if($rendicion->rendicionesanuales->tipos_rendiciones_anuales='2')
                            <input id="rdc_actual" type="text" value="{{$rendicion->rendicionesanuales->declaraciones->mes_id }}" style="width:80;" maxlength="10" name="rdc_actual"></input>
                        @endif
                    </td>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Ultima rdc aprobada </b>
                        </font>
                        <input id="rdc_ultima" type="text" value="" style="width:80;" maxlength="10" name="rdc_ultima"></input>
                    </td>

                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha presentacion siguiente rendicion </b>
                        </font>
                        <input id="rdc_proxima" type="text" value="" style="width:80;" maxlength="10" name="rdc_proxima"></input>
                    </td>

                </tr>  

                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Observaciones </b>
                        </font>
                        <input id="observaciones_rdc_anual" type="text" value="{{ $rendicion->observaciones }}" style="width:80;" maxlength="10" name="observaciones_rdc_anual"></input>
                    </td> 
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                    </td>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                    </td>
                    <br>
                </tr>
            @elseif($rendicion->tipo=='FINAL')
                <tr>
                    <td bgcolor="white" >
                        <font align="3" size="3" color="black" face="Arial">
                            <b>Rendiciones finales _________________________________</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha fallecimiento </b>
                        </font>
                        <input id="fecha_fallecimiento" type="text" value="{{ $expediente->datos_personales->fecha_fallecimiento }}  {{ $rendicion->rendicionesfinales->fecha_fallecimiento }}" style="width:80;" maxlength="10" name="fecha_fallecimiento"></input>
                        
                    </td>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha remocion </b>
                        </font>
                        <input id="fecha_remocion" type="text" value="{{ $expediente->fecha_remocion }}" style="width:80;" maxlength="10" name="fecha_remocion"></input>
                    </td>

                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha reintegro discapacidad </b>
                        </font>
                        <input id="fecha_reintegro" type="text" value="{{ $expediente->fecha_reintegro_capacidad }}" style="width:80;" maxlength="10" name="fecha_reintegro"></input>
                    </td>

                </tr>        

                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Empleado </b>
                        </font>
                        <input id="empleado_rdc_final" type="text" value="" style="width:80;" maxlength="10" name="empleado_rdc_final"></input>
                    </td>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Sol. cert. defuncion</b>
                        </font>
                        <input id="fecha_certificado_defuncion" type="text" value="{{ $rendicion->rendicionesfinales->fecha_certificado_defuncion }}" style="width:80;" maxlength="10" name="fecha_certificado_defuncion"></input>
                    </td>
                    
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Sol. ultimas voluntades</b>
                        </font>
                        <input id="fecha_ultimas_voluntades" type="text" value="{{ $rendicion->rendicionesfinales->fecha_solicitud_ultimas_voluntades }}" style="width:80;" maxlength="10" name="fecha_ultimas_voluntades"></input>
                        
                    </td>
                </tr>
                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Presentacion juzgado </b>
                        </font>
                        <input id="fecha_presentacion_rdc_final" type="text" value="{{ $rendicion->fecha_presentacion }}" style="width:80;" maxlength="10" name="fecha_presentacion_rdc_final"></input>
                    </td>
                    
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Fecha Aprobacion juzgado</b>
                        </font>
                        <input id="fecha_aprobacion_rdc_final" type="text" value="{{ $rendicion->fecha_aprobacion }}" style="width:80;" maxlength="10" name="fecha_aprobacion_rdc_final"></input>
                        
                    </td>
                    

                    <td width="33%" bgcolor="#FFEBCD" align="left">
                    </td>
                </tr>
                <tr>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                        <font size="2" color="black" face="Arial">
                            <b>Observaciones </b>
                        </font>
                        <input id="observaciones_rdc_final" type="text" value="{{ $rendicion->observaciones }}" style="width:80;" maxlength="10" name="observaciones_rdc_final"></input>
                    </td> 
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                    </td>
                    <td width="33%" bgcolor="#FFEBCD" align="left">
                    </td>
                </tr>
            @endif
        @endforeach    
    @endif



  </tbody>
</table>

