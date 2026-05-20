@props (['expediente'])
@php
    $inmuebles= $expediente->inmuebles;
    

@endphp

<table  cellspacing="0" cellpadding="8" border="0" align="center">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center;padding:2px">

            <b style=" color:orange; font-size:20pt" >INMUEBLES</b>
            </td>
        </tr>
        
        <tr>
            <td  style="border:1px solid; padding:2px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Inmuebles _________________________________</b>
                </font>
            </td>
        </tr>
        
        @if (count($expediente->inmuebles)>0)
            @foreach($inmuebles as $inmueble)
            @if ($inmueble->is_deleted=='2')
                <tr>

                    <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)">
                        
                        <label>Tipo: </label>
                        <input class="inputtable" id="tipo_inmmueble" type="text" style="color:blue" value="{{ $inmueble->tipoinmuebles->nombre??'' }}"></input>
                        <label>Provincia:   </label>
                        <input class="inputtable" id="provincia_inmueble" type="text" style="color:blue" value="{{ $inmueble->provincia??'' }}"></input>
                        <label>Localidad </label>
                        <input class="inputtable" id="localidad_inmueble" type="text" style="color:blue" value="{{ $inmueble->localidad??'' }}" style="width:150;"  name="fecha_tutela"></input>
                        
                    </td>

                </tr>

                <tr>
                    <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)">
                        
                        <label>Domicilio: </label>
                        <input class="inputtable" id="domicilio_inmueble" type="text" style="color:blue" size="<?php echo strlen($inmueble->direccion);?>"value="{{ $inmueble->direccion??'' }}"></input>
                        <label>Numero: </label>
                        <input class="inputtable" id="numero_inmueble" type="text" style="color:blue" size="<?php echo strlen($inmueble->numero);?>"value="{{ $inmueble->numero??'' }}"></input>
                        <label>Planta: </label>
                        <input class="inputtable" id="planta_inmueble" type="text" style="color:blue" size="<?php echo strlen($inmueble->planta);?>"value="{{ $inmueble->planta??'' }}"></input>
                        <label>Letra: </label>
                        <input class="inputtable" id="letra_inmueble" type="text" style="color:blue" size="<?php echo strlen($inmueble->letra);?>"value="{{ $inmueble->letra??'' }}"></input>
                        
                        <label>Cod.Postal:   </label>
                        <input class="inputtable" id="codigo_postal_inmueble" type="text" style="color:blue" value="{{ $inmueble->codigo_postal??'' }}"></input>
                        
                    </td>

                </tr>
                <tr>
                    <td style="border:1px solid; border-top:0px ; padding:2px; background-color: rgb(224, 204, 204)" >
                        <label>Observaciones:  </label>
                        <input class="inputtable" id="observaciones_inmueble" type="text" style="color:blue" size="<?php echo strlen($inmueble->observaciones)+5;?>"value="{{ $inmueble->observaciones??'' }}" style="width:200;"  name="observaciones_inmueble"></input>
                        
                    </td>

                </tr>
                @endif
            @endforeach
        @else
                <tr>
                    <td style="border:1px solid;  padding:2px; background-color: rgb(224, 204, 204)"  >
                    
                        <label>NO HAY DATOS</label>
                        
                        
                    </td>

                </tr>
        @endif
                
        
        
        
    </tbody>
</table>
