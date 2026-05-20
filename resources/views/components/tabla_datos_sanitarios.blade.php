@props (['expediente'])
@php
    $patologiasconcretas= $expediente->patologiasconcretas; 
                              
@endphp

<table  cellspacing="0" cellpadding="8" border="0" align="center">
    
    
    <tbody>
        

        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >DATOS SOCIO/SANITARIOS</b>
            </td>
        </tr>
        
        @if ($expediente->datos_personales->segurosmedicos)   
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                            <b>Otra asistencia sanitaria_________________________________</b>
                </font>
            </td>
        </tr>   
        <tr>
            <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
                    <label>Seguro médico: </label>
                    <input class="inputtable" id="seguro_medico" type="text" style="color:blue" value="{{ $expediente->datos_personales->segurosmedicos->nombre??'sin datos'}}"></input>
                    <label>Número póliza: </label>
                    <input class="inputtable" id="numero_poliza" type="text" style="color:blue" value="{{ $expediente->datos_personales->numero_seguro_medico ??'sin datos'}} "></input>
                    
                        
            </td>

        </tr> 
        @endif   
        
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                            <b>Diagnóstico médico_________________________________</b>
                </font>
            </td>
        </tr>
                
                
                
        <tr>
            <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
                <label>Diagnóstico médico: </label></br>
                    @if (count($patologiasconcretas)>0)
                            
                        @foreach ($patologiasconcretas as $patologia)
                            <input size="<?php echo strlen($patologia->nombre)+5;?>" class="inputtable" id="patologias_concretas" type="text" style="color:blue" value="{{ $patologia->nombre??'Sin datos' }}"></input>
                            </br>
                            
                        @endforeach
                            
                    @else
                        <label style="color:red">NO HAY DATOS</label>
                        
                    @endif
                        
            </td>

        </tr>
        @if ($expediente->discapacidades) 
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Discapacidad _________________________________</b>
                </font>
            </td>

        </tr>
        <tr>
            <td style="border:0px solid; border-top:1px solid;border-left:1px solid; border-right:1px solid;  padding:12px; background-color: rgb(224, 204, 204)"  >
                <label>Grado discapacidad: </label>
                <input class="inputtable" id="grado_discapacidad" type="text" style="color:blue" value="{{ $expediente->discapacidades->grado??'sin datos'}}"></input>
                <label>Fecha efecto: </label>
                <input class="inputtable" id="fecha_efecto_discapacidad" type="text" style="color:blue" value="{{ $expediente->discapacidades->fecha_efecto ? date("d/m/Y",strtotime ($expediente->discapacidades->fecha_efecto)):'' }}"></input>
                <label>Fecha valoracion: </label>
                <input class="inputtable" id="fecha_valoracion_discapacidad" type="text" style="color:blue" value="{{ $expediente->discapacidades->fecha_valoracion == null ? 'sin datos' : date("d/m/Y",strtotime ($expediente->discapacidades->fecha_valoracion)) }}"></input>
            </td>
        </tr>
        <tr>       
            <td style="border:0px solid; border-left:1px solid;border-right:1px solid;border-bottom:1px solid;  padding:12px; background-color: rgb(224, 204, 204)"  >
                <label>Revisable: </label>
                <input class="inputtable" id="revisable_discapacidad" type="text" style="color:blue" value="{{ ($expediente->discapacidades->is_revisable==1)?'SI':'NO'}}"></input>
                <label>Fecha revision: </label>
                <input class="inputtable" id="fecha_revision_discapacidad" type="text" style="color:blue" value="{{ $expediente->discapacidades->fecha_revision == null ? 'sin datos' : date("d/m/Y",strtotime ($expediente->discapacidades->fecha_revision)) }}"></input>  
            </td>

        </tr>
        @endif
        @if ($expediente->dependencias)        
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Dependencia _________________________________</b>
                </font>
            </td>

        </tr>
        <tr>
            <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
                <label>Grado: </label>
                <input class="inputtable" id="grado_dependencia" type="text" style="color:blue"  size="2" value="{{ $expediente->dependencias->gradosdependencias->grado??'' }}"></input>
                <label>Nivel: </label>
                <input class="inputtable" id="nivel_dependencia" type="text" style="color:blue" size="3" value="{{ $expediente->dependencias->nivelesdependencias->nivel??''  }}"></input>
                <label>Fecha efecto: </label>
                <input class="inputtable" id="fecha_efecto_dependencia" type="text" style="color:blue" value="{{ $expediente->dependencias->fecha_efecto == null ? '' : date("d/m/Y",strtotime ($expediente->dependencias->fecha_efecto)) }}"></input>
                <label>Fecha resolucion: </label>
                <input class="inputtable" id="fecha_resolucion_dependencia" type="text" style="color:blue" value="{{ $expediente->dependencias->fecha_resolucion == null ? '' : date("d/m/Y",strtotime ($expediente->dependencias->fecha_resolucion)) }}"></input>
                <label>Activa: </label>
                <input class="inputtable" id="activa_dependencia" type="text" style="color:blue" size="<?php echo strlen($expediente->dependencias->activa)+3;?>"value="{{ ($expediente->dependencias->activa==1)?'SI':'NO'  }}"></input>

            </td>

        </tr>
        <tr>
            <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
                <label>Tipo de prestacion de dependencia: </label>
                <input class="inputtable" id="prestacion_dependencia" type="text" style="color:blue" size="100"value="{{ ($expediente->dependencias->prestacionesdependencias->nombre)??'no hay datos'  }}"></input>
            </br>
                <label>Prestacion dependencia económica: </label>
                <input class="inputtable" id="economica_dependencia" type="text" style="color:blue" size="100"value="{{ ($expediente->dependencias->prestaciondependenciaeconomicas->nombre)??'no hay datos'  }}"></input>
                
            </br>
            <label>Prestacion dependencia servicio: </label>
                <input class="inputtable" id="servicio_dependencia" type="text" style="color:blue" size="100"value="{{ ($expediente->dependencias->prestaciondependenciaservicios->nombre)??' no hay datos' }}"></input>
                
            </td>

        </tr>
        @endif

          
           
           
            
    </tbody>
</table>
