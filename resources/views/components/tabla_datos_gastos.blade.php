@props (['expediente'])

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="8">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >GASTOS VARIOS</b>
            </td>
        </tr>
        
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="2">
                <font size="3" color="black" face="Arial">
                    <b>Gastos Varios _________________________________</b>
                </font>
            </td>
        </tr>
        <tr>
            <td style="border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                
                <label>Concepto: </label>
                <input class="inputtable" id="concepto" type="text" style="color:blue" value=""></input>
                <label>Cuantía:   </label>
                <input class="inputtable" id="cantidad" type="text" style="color:blue" value=""></input>
                <label>A fecha </label>
                <input class="inputtable" id="fecha_gasto" type="date" style="color:blue" value="" style="width:150;"  name="fecha_tutela"></input>
                
            </td>

        </tr>
        <tr>
            <td style="border:1px solid; border-top:0px ; padding:12px; background-color: rgb(224, 204, 204)" >
                <label>Nº Cuenta Bancaria:  </label>
                <input class="inputtable" id="fecha_tutela" type="text" style="color:blue" value="" style="width:150;"  name="fecha_tutela"></input>
                
            </td>

        </tr>
        
        
        
        
    </tbody>
</table>
