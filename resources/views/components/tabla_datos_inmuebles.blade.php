@props (['expediente'])

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="8">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >INMUEBLES</b>
            </td>
        </tr>
        
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Inmuebles _________________________________</b>
                </font>
            </td>
        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                
                <label>Tipo: </label>
                <input class="inputtable" id="tipo_inmmueble" type="text" style="color:blue" value=""></input>
                <label>Provincia:   </label>
                <input class="inputtable" id="provincia_inmueble" type="text" style="color:blue" value=""></input>
                <label>Localidad </label>
                <input class="inputtable" id="localidad_inmueble" type="date" style="color:blue" value="" style="width:150;"  name="fecha_tutela"></input>
                
            </td>

        </tr>

        <tr>
            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                
                <label>Domicilio: </label>
                <input class="inputtable" id="domiclio_inmueble" type="text" style="color:blue" value=""></input>
                <label>Cod.Postal:   </label>
                <input class="inputtable" id="co_postal_inmueble" type="text" style="color:blue" value=""></input>
                
            </td>

        </tr>
        <tr>
            <td style="border:1px solid; border-top:0px ; padding:12px; background-color: rgb(224, 204, 204)" >
                <label>Observaciones:  </label>
                <input class="inputtable" id="observaciones_inmueble" type="text" style="color:blue" value="" style="width:150;"  name="fecha_tutela"></input>
                
            </td>

        </tr>
        
        
        
        
    </tbody>
</table>
