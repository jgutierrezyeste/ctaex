@props (['expediente'])
@php
    $patologiasconcretas= $expediente->patologiasconcretas; 
                              
@endphp

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="8">
    
    
    <tbody>
       
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >DATOS SOCIO/SANITARIOS</b>
            </td>
        </tr>
        
           
           
            
        
                <tr>
                    <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                        <font size="3" color="black" face="Arial">
                            <b>Ficha Médica _________________________________</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                        
                        
                        <label>Grado discapacidad </label>
                        <input class="inputtable" id="grado_discapacidad" type="text" style="color:blue" value="{{ $expediente->grado_discapacidad??'' }}"></input>
                        <label>Fallecido</label>
                        <input class="inputtable" id="fallecido" type="date" style="color:blue" value="{{ $expediente->fecha_fallecimiento_final == null ? 'NO' : 'SI' }}"></input>
                    
                    </td>
                </tr>
                
                
                <tr>
                    <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
                        <label>Diagnóstico médico: </label></br>
                        @if (count($patologiasconcretas)<=1)
                            @if (count($patologiasconcretas)==1)
                            @foreach ($patologiasconcretas as $patologia)
                                <input size="<?php echo strlen($patologia->nombre)+5;?>" class="inputtable" id="patologias_concretas" type="text" style="color:blue" value="{{ $patologia->nombre??'Sin datos' }}"></input>
                                <label>Patologia general: </label>
                                <input size="<?php echo strlen($patologia->patologiasgenerales->nombre??'')+5;?>" class="inputtable" id="patologias_general" type="text" style="color:blue" value="{{ $patologia->patologiasgenerales->nombre??'Sin datos' }}"></input>
                                </br>
                            
                            @endforeach
                            @else
                                <label style="color:red">NO HAY DATOS</label>
                            @endif
                            
                        @else
                            @foreach ($patologiasconcretas as $patologia)
                                <input size="<?php echo strlen($patologia->nombre)+5;?>" class="inputtable" id="patologias_concretas" type="text" style="color:blue" value="{{ $patologia->nombre??'' }}"></input>
                                 </br>
                        
                             @endforeach
                        
                        @endif
                        
                    </td>

                </tr>

                @if (count($patologiasconcretas)>1)
                <tr>
                    <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
                        <label>Patologia general: </label></br>
                        
                        
                        <input class="inputtable" id="patologias_general" type="text" style="color:blue" value="PATOLOGIA DUAL"></input>
                           
                    </br>    
                    </td>

                </tr>
                @endif 
                
                <tr>
                     <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                        <font size="3" color="black" face="Arial">
                            <b>Fechas _________________________________</b>
                        </font>
                    </td>

                </tr>
                <tr>
                    <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
                        <label>Certificado minusvalía: </label>
                        
                        <input class="inputtable" id="minusvalia" type="date" style="color:blue" value="{{ $expediente->fecha_discapacidad  ? date("d/m/Y",strtotime ($expediente->fecha_discapacidad)):'No hay datos' }}"></input>
                        <label>Defuncion: </label>
                        
                        <input class="inputtable" id="defuncion" type="date" style="color:blue" value="{{ $expediente->fecha_fallecimiento_final == null ? 'No fallecido' : date("d/m/Y",strtotime ($expediente->fecha_fallecimiento_final)) }}"></input>
                        
                        
                    </td>

                </tr>
          
           
           
            
    </tbody>
</table>
