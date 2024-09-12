@props (['expediente'])
@php
    $remociones= $expediente->remociones;
    if ($remociones)
        $representantes=$remociones->representantes;
    
 
@endphp

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="8">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >DATOS REPRESENTANTES</b>
            </td>
        </tr>
           @if ($remociones)
                @foreach($representantes as $representante)
                 @php
                    $archivo=fopen("representantes.txt","w+");
                    fwrite($archivo, $representante);
                 @endphp   
                <tr>
                    <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                        <font size="3" color="black" face="Arial">
                            <b>Representantes _________________________________</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                        
                        <label>Nombre: </label>
                        <input class="inputtable" id="nombre" type="text" style="color:blue" value="{{ $representante->nombre??'' }}"></input>
                        <label>Apellidos </label>
                        <input class="inputtable" size="<?php echo strlen($representante->apellido1 .'   '. $representante->apellido2)+2;?>" id="apellidos" type="text" value="{{ $representante->apellido1??''}}, {{$representante->apellido2??''  }} "   name="apellidos"></input>
                        
                    </td>

                </tr>
                <tr>
                    <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                        
                        <label>Provincia: </label>
                        <input class="inputtable" id="provincia" type="text" style="color:blue" value=""></input>
                        <label>Localidad </label>
                        <input class="inputtable"  id="localidad" type="text" value=""   name="localidad"></input>
                        
                    </td>

                </tr>
                <tr>
                    <td style="border:1px solid; border-top:0px;  padding:12px; background-color: rgb(224, 204, 204)">
                        
                        <label>Domicilio: </label>
                        <input class="inputtable" id="domicilio" type="text" style="color:blue" value=""></input>
                        <label>Cod.Postal </label>
                        <input class="inputtable"  id="codigo_postal" type="text" value=""   name="codigo_postal"></input>
                        <label>Telefono: </label>
                        <input class="inputtable" id="telefono" type="text" style="color:blue" value=""></input>
                        <label>Parentesco </label>
                        <input class="inputtable"  id="parentesco" type="text" value="{{ $representante->pivot->relacion_id??'' }}"   name="parentesco"></input>
                        
                    </td>

                </tr>
            
                @endforeach
            
           @else
                <tr>
                    <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                        <font size="3" color="black" face="Arial">
                            <b>REPRESENTANTES _________________________________</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid;  padding:12px; background-color: rgb(224, 204, 204)" >
                        
                        <label>NO HAY REPRESENTANTES </label>
                    </td>

                </tr>
            @endif
            
            
    </tbody>
</table>
