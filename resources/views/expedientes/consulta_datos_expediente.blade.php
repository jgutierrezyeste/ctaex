@php
    $titulo="CONSULTA DEL EXPEDIENTE";
   $archivo=fopen("datosExpedietne.txt","w+");
  
@endphp
@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')
@section('subtitle')
    
<x-comun_expedientes_imprimir :titulo="$titulo"></x-comun_expedientes_imprimir>

@endsection
@section('content')
@if($expediente)
<div align="center">



<form id="datos_expediente" name="datos_expediente" method ="GET" >
    @csrf
    <table class="tablegeneral" cellspacing="0" cellpadding="8" border="0">
        <tbody>
            <tr>
                <td bgcolor="white" colspan="2">
                    <font size="3" color="black" face="Arial">
                        <b>Fechas _________________________________</b>
                    </font>
                </td>
            </tr>
            <tr>
                <td width="45%" bgcolor="#FFEBCD" align="left">
                    <font size="2" color="black" face="Arial">
                        <b>Entrada en la Junta </b>
                    </font>
                    <input id="fecha_entrada" type="date" value="{{ $expediente->fecha_entrada_area_aecca?? '' }}" style="width:80;" maxlength="10" name="fecha_entrada"></input>
                    
                  </td>
                <td width="55%" bgcolor="#FFEBCD" align="left">
                    <font size="2" color="black" face="Arial">
                        <b>Propuesta de Aceptacion </b>
                    </font>
                    <input id="fecha_aceptacion_cargo" type="date" value="{{ $expediente->fecha_aceptacion_cargo??'' }}" style="width:80;" maxlength="10" name="fecha_aceptacion_cargo"></input>
                </td>

            </tr>
            <tr>
              <td width="45%" bgcolor="#FFEBCD" align="left">
                  <font size="2" color="black" face="Arial">
                      <b>Remision al Gabinete </b>
                  </font>
                  <input id="fecha_remision_gabinete" type="date" value="{{ $expediente->fecha_aceptacion_cargo??'' }}" style="width:80;" maxlength="10" name="fecha_remision_gabinete"></input>
                  
                </td>
              <td width="55%" bgcolor="#FFEBCD" align="left">
                  <font size="2" color="black" face="Arial">
                      <b>Recibimos del Gabinete </b>
                  </font>
                  <input id="fecha_recibimos_gabinete" type="date" value="{{ $expediente->fecha_aceptacion_cargo??'' }}" style="width:80;" maxlength="10" name="fecha_recibimos_gabinete"></input>
              </td>

          </tr>
   
        </tbody>
    </table>

    <table  class="tablegeneral" cellspacing="0" cellpadding="8" border="0">
                   
      <tbody>
          <tr>
          <td colspan="3" bgcolor="white">
            <!-- -------------------------------- Expediente ------------------------ -->
            <font align="3" face="Arial" color="black" size="3">
             <br>
             <b>Expediente __________________________________________________</b>	            
            </font>
          </td>
        </tr>		
        <tr>
          <td align="left" bgcolor="#FFEBCD" width="35%">			
            <font face="Arial" color="black" size="2">
              <b>&nbsp;Nº Expediente&nbsp;</b>            
            </font>          
            <font face="Arial" color="red" size="2">
              <input id="num_expte_intranet" type="text" value="{{ $expediente->num_expte_intranet??'' }}" style="width:80;" maxlength="10" name="num_expte_intranet"></input>          
            </font>
          </td>	
          <td align="left" bgcolor="#FFEBCD" width="50%">	
             <font face="Arial" color="black" size="2">
              <b>&nbsp;&nbsp;Régimen Inicial&nbsp;</b> 
            </font>
            <input id="regimen" type="text" value="{{ $expediente->regimen??'' }}" style="width:80;" maxlength="10" name="regimen"></input>        
          </td>	
          
        </tr>
        <tr>
          <td align="left" bgcolor="#FFEBCD" width="35%">			
            <font face="Arial" color="black" size="2">
              <b>&nbsp;Nº Expediente Actual&nbsp;</b>            
            </font>          
            <font face="Arial" color="red" size="2">
              <input id="expte"  type="text" value="{{ $expediente->expte??'' }}" style="width:80;" maxlength="15" name="expte"></input>          
            </font>
          </td>	
          <td align="left" bgcolor="#FFEBCD" width="50%">	
             <font face="Arial" color="black" size="2">
              <b>&nbsp;&nbsp;Régimen Actual&nbsp;</b> 
            </font>
            <input id="regimen_actual" type="text" value="{{ $expediente->regimen_actual??'' }}" style="width:80;" maxlength="10" name="regimen_actual"></input>        
          </td>	
          
        </tr>

      </tbody>
  </table>
    <table class="tablegeneral" cellspacing="0" cellpadding="8" border="0">
        <tbody>
            <tr>
                <td bgcolor="white" colspan="2">
                    <font size="3" color="black" face="Arial">
                    <br>
                        <b>Datos Personales _________________________________</b>
                    </font>
                </td>
            </tr>
            <tr>
                <td width="35%" bgcolor="#FFEBCD" align="left">
                    <font size="2" color="black" face="Arial">
                        <b>Nombre </b>
                    </font>
                    <input id="nombre" type="text" value="{{ $expdatospersonales->nombre??''}}" style="width:150;"  name="nombre"></input>
                </td>
                <td width="35%" bgcolor="#FFEBCD" align="left">
                    <font size="2" color="black" face="Arial">
                        <b>Apellidos </b>
                    </font>
                    <input id="apellidos" type="text" value="{{ $expdatospersonales->apellido1??''}} {{ $expdatospersonales->apellido2??'' }}" style="width:250;" name="apellidos"></input>
                </td>
                <td width="30%" bgcolor="#FFEBCD" align="left">
                  <font size="2" color="black" face="Arial">
                      <b>Sexo </b>
                  </font>
                  <input id="sexo" type="text" value="{{ $expdatospersonales->sexos->nombre??''}}" style="width:50;" name="sexo"></input>
              </td>
            </tr>
            
   
        </tbody>
    </table>

    

<table class="tablegeneral" cellspacing="0" cellpadding="8" border="0" >
               
    <tbody><tr>
        <td colspan="3" bgcolor="white">	       
<!-- ------------------------------------------------- Juzgado ----------------------------------------------- -->
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
          <input id="tipo_procedimiento" type="text" value="{{ $expediente->tipo_procedimiento??''}} {{ $expediente->num_incapacitacion??'' }}"  name="tipo_procedimiento"></input>

        </td>	
        <td align="left" bgcolor="#FFEBCD" width="33%"></td>
        <td align="left" bgcolor="#FFEBCD" width="33%"></td>

     </tr>  
     <tr> 
       <td  align="left" bgcolor="#FFEBCD" width="50%">		  
         <font face="Arial" color="black" size="2">
          <b>&nbsp;Juzgado</b>
         </font>
         <input id="juzgado" type="text" value="{{ $expediente->juzgado??''}}"  style="width:50%;" name="juzgado"></input></td>
        </td>
        <td align="left" bgcolor="#FFEBCD" width="25%"></td>
        <td align="left" bgcolor="#FFEBCD"width="25%"></td>
      </tr>
      <tr>
        <td  align="left" bgcolor="#FFEBCD" width="33%">		  
          <font face="Arial" color="black" size="2">
           <b>&nbsp;Provincia</b>
          </font>
          <input id="provincia" type="text" value="{{ $expediente->provincia??''}}" style="width:50;" name="provincia"></input></td>
         </td>
         <td  align="left" bgcolor="#FFEBCD" width="33%">		  
          <font face="Arial" color="black" size="2">
           <b>&nbsp;Poblacion</b>
          </font>
          <input id="poblacion" type="text" value="{{ $expediente->provincia??''}}" style="width:50;" name="poblacion"></input></td>
         </td>
         <td  align="left" bgcolor="#FFEBCD" width="33%">		  
          <font face="Arial" color="black" size="2">
           <b>&nbsp;Codigo Postal</b>
          </font>
          <input id="codigo_postal" type="text" value="{{ $expediente->provincia??''}}" style="width:50;" name="codigo_postal"></input></td>
         </td>
       
      </tr>
      <tr>
      </tr>
   </tbody>
</table>


    

    <a href="{{route('index_intranet')}}"> Vuelta al listado </a>
</form>



</div>
    
@else
<p>NO HAY DATOS</p>    
@endif

@endsection