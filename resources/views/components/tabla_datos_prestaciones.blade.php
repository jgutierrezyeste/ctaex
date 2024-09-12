@props (['expediente'])
@php
    $prestaciones= $expediente->expedientes_prestaciones;
    
 
@endphp

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="8">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >PRESTACIONES</b>
            </td>
        </tr>
           
                <tr>
                    <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                        <font size="3" color="black" face="Arial">
                            <b>Prestaciones _________________________________</b>
                        </font>
                    </td>
                </tr>
                @if (count($prestaciones)>=1)
                    @foreach($prestaciones as $prestacion)
                    <tr>
                        <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                            
                            <label>Prestacion:  </label>
                            <input class="inputtable" id="prestacion" type="text" style="color:blue" size="<?php echo strlen($prestacion->nombre??'')+5 ?>" value="{{ $prestacion->nombre??'' }}"></input>
                            <label>Importe </label>
                            <input class="inputtable" id="importe" type="text" style="color:blue" value="{{ $prestacion->pivot->importe??'' }}"></input>
                            <label>Año prestacion </label>
                            <input class="inputtable" id="importe" type="text" style="color:blue" value="{{ $prestacion->pivot->año_id??''}}"></input>
                        
                        </td>

                    </tr>

                    <tr>
                        <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
                            <label>Cuenta Bancaria:   </label>

                            <label>IBAN </label>
                            <input class="inputtable" id="IBAN" type="text" style="color:blue"  value=""></input>
                            <label>Entidad financiera </label>
                            <input class="inputtable" id="entidad_financiera" type="text" style="color:blue"  value=""></input>
                            <label>Oficina </label>
                            <input class="inputtable" id="oficina" type="text" style="color:blue"  value=""></input>

                            <label>Digito_control </label>
                            <input class="inputtable" id="digito_control" type="text" style="color:blue"  value=""></input>

                            <label>Numero_cuenta </label>
                            <input class="inputtable" id="numero_cuenta" type="text" style="color:blue"  value=""></input>

                        </td>

                    </tr>
                
                    @endforeach
            
                @else
                
                    <tr>
                        <td style="border:1px solid;  padding:12px; background-color: rgb(224, 204, 204)" >
                            
                            <label>NO HAY PRESTACIONES </label>
                        </td>

                    </tr>
                 @endif
            
            
    </tbody>
</table>
