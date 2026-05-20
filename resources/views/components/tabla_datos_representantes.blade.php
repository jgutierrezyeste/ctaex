@props (['expediente'])
@php
    $archivo=fopen("representamtes.txt","w+");
        $representantes=$expediente->representantes;
    fwrite($archivo,print_r($representantes,true));
 
@endphp

<table  cellspacing="0" cellpadding="8" border="0" align="center">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >DATOS REPRESENTANTES</b>
            </td>
        </tr>
           @if ($representantes)
                <tr>
                    <td  style="border:1px solid; padding:2px" bgcolor="white" colspan="2">
                        <font size="3" color="black" face="Arial">
                            <b>Representantes _________________________________</b>
                        </font>
                    </td>
                </tr>
                @foreach($representantes as $representante)
                  
                
                <tr>
                    <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)">
                        
                        <label>Nombre: </label>
                        <input class="inputtable" id="nombre" type="text" style="color:blue" value="{{ $representante->nombre??'' }}"></input>
                        <label>Apellidos </label>
                        <input class="inputtable" size="<?php echo strlen($representante->apellido1 .'   '. $representante->apellido2)+2;?>" id="apellidos" type="text" value="{{ $representante->apellido1??''}} {{$representante->apellido2??''  }} "   name="apellidos"></input>
                        
                    </td>

                </tr>
                <tr>
                    <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:2px; background-color: rgb(224, 204, 204)">
                        
                        <label>Provincia: </label>
                        <input class="inputtable" id="provincia_representante" type="text" style="color:blue"  value="{{ $representante->provincia??'Sin datos' }}"></input>
                        <label>Localidad </label>
                        <input class="inputtable"  id="localidad_representante" type="text" size="<?php echo strlen($representante->localidad)+2?>"value="{{ $representante->localidad??'' }}"   name="localidad"></input>
                        
                    </td>

                </tr>
                <tr>
                    <td style="border:0px solid; border-left:1px solid;border-right:1px solid;  padding:2px; background-color: rgb(224, 204, 204)">   
                        <label>Tipo de via: </label>
                        <input class="inputtable" id="tipovia_representante" type="text" style="color:blue" value="{{ $representante->tvias->nombre??'' }}"></input>
                        
                        <label>Domicilio: </label>
                        <input class="inputtable" id="domicilio_representante" type="text" style="color:blue" value="{{ $representante->domicilio??'' }}"></input>
                        <label>Numero: </label>
                        <input class="inputtable" id="numero_representante" type="text" style="color:blue" size="5"value="{{ $representante->numero??'' }}"></input>
                        <label>Planta: </label>
                        <input class="inputtable" id="planta_representante" type="text" style="color:blue" size="5"value="{{ $representante->planta??'' }}"></input>
                        <label>Letra: </label>
                        <input class="inputtable" id="letra_representante" type="text" style="color:blue" size="5"value="{{ $representante->letra??'' }}"></input>
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid; border-top:0px;  padding:2px; background-color: rgb(224, 204, 204)">

                        <label>Cod.Postal </label>
                        <input class="inputtable"  id="codigo_postal_representante" type="text" value="{{ $representante->codigo_postal??'' }}"   name="codigo_postal"></input>
                        <label>Telefono: </label>
                        <input class="inputtable" id="telefono_representante" type="text" style="color:blue" value="{{ $representante->telefono??'' }}"></input>
                        <label>Relacion </label>
                        <input class="inputtable"  id="relacion_representante" type="text" value="{{ $representante->pivot->relacion->nombre??'sin datos' }}"   name="relacion"></input>
                        
                    </td>

                </tr>
            
                @endforeach
            
           @else
                <tr>
                    <td  style="border:1px solid; padding:2px" bgcolor="white" colspan="2">
                        <font size="3" color="black" face="Arial">
                            <b>REPRESENTANTES _________________________________</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid;  padding:2px; background-color: rgb(224, 204, 204)" >
                        
                        <label>NO HAY REPRESENTANTES </label>
                    </td>

                </tr>
            @endif
            
            
    </tbody>
</table>
