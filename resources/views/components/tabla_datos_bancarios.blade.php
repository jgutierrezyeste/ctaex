@props (['expediente'])
@php
    $entidadesbancarias=$expediente->entidadesbancarias;
 
@endphp

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="8">
    
    
    <tbody>
       
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >DATOS BANCARIOS</b>
            </td>
        </tr>
        
           
           
           
        
                <tr>
                    <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                        <font size="3" color="black" face="Arial">
                            <b>Entidad _________________________________</b>
                        </font>
                    </td>
                </tr>
                @if($entidadesbancarias)
                        @foreach ($entidadesbancarias as $entidad) 
                        <tr>
                            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                                
                                
                                <label>Entidad: </label>
                                <input class="inputtable" id="entidad" type="text" style="color:blue" value="{{ $entidad->nombre??'' }}"></input>
                                <label>Direccion Oficina: </label>
                                <input class="inputtable" id="direccion" type="text" style="color:blue" value="{{ $entidad->nombre??'' }}"></input>
                            </td>
                                
                                
                                
                        </tr>
                        <tr>
                            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                                <font size="3" color="black" face="Arial">
                                    <b>Cuenta _________________________________</b>
                                </font>
                            </td>
                        </tr>    
                        
                        <tr>
                            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                                <label>Cuenta Bancaria:   </label>

                                <label>IBAN </label>
                                <input class="inputtable" id="IBAN" type="text" style="color:blue" size="<?php echo strlen($entidad->pivot->codigo_iban )?>" value="{{ $entidad->pivot->codigo_iban??'' }}"></input>
                                <label>Entidad financiera </label>
                                <input class="inputtable" id="entidad_financiera" type="text" style="color:blue" size="<?php echo strlen($entidad->pivot->entidad_financiera )?>" value="{{ $entidad->pivot->entidad_financiera??'' }}"></input>
                                <label>Oficina </label>
                                <input class="inputtable" id="oficina" type="text" style="color:blue" size="<?php echo strlen($entidad->pivot->oficina )?>" value="{{ $entidad->pivot->oficina??'' }}"></input>

                                <label>Digito_control </label>
                                <input class="inputtable" id="digito_control" type="text" style="color:blue" size="<?php echo strlen($entidad->pivot->digito_control )?>" value="{{ $entidad->pivot->digito_control??''}}"></input>

                                <label>Numero_cuenta </label>
                                <input class="inputtable" id="numero_cuenta" type="text" style="color:blue" size="<?php echo strlen($entidad->pivot->numero_cuenta )?>" value="{{ $entidad->pivot->numero_cuenta??'' }}"></input>

                            </td>

                        </tr>
                        <tr>
                            <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)"  >
                                <label>Saldo </label>
                                <input class="inputtable" id="saldo" type="text" style="color:blue"  value=""></input>
                                <label> A fecha </label>
                                <input class="inputtable" id="fecha_saldo" type="date" style="color:blue"  value=""></input>
                                <label>Intereses </label>
                                <input class="inputtable" id="intereses" type="text" style="color:blue"  value=""></input></br></br>
                                <label>Otros titulares: </label>
                                <input class="inputtable" id="titulares" type="text" style="color:blue"  value=""></input>

                            </td>
                        </tr>
                        <tr>
                            
                        </tr>

                
                        @endforeach
                @endif
                @if(count($entidadesbancarias)<1)
                <tr>
                    <td style="border:1px solid;  padding:12px; background-color: rgb(224, 204, 204)"  >
                       
                        <label>NO HAY DATOS</label>
                        
                        
                    </td>
        
                </tr>
                @endif
           
            
    </tbody>
</table>
