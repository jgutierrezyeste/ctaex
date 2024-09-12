@props (['expediente'])

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="5">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >INVENTARIOS</b>
            </td>
        </tr>
        
      
        <tr>
            <td  style="border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>De Bienes_________________________________</b>
                </font>
            </td>
            <td  style="border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>Informe Anual _______________________________</b>
                </font>
            </td>
            <td  style="border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>Informe fallecimiento ________________________</b>
                </font>
            </td>
        </tr>
        <tr>
            <td style="width:33%; border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
                
               
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Aprobación </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_aprobacion_rdc ?date("d/m/Y",strtotime ($expediente->fecha_aprobacion_rdc)):'Sin datos' }}"></input>
            </td>

            <td style="width:33%; border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
                
               
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Aprobación </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_aprobacion_rdc ?date("d/m/Y",strtotime ($expediente->fecha_aprobacion_rdc)):'Sin datos' }}"></input>
            </td>

            <td style="width:33%;border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
                
                
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Aprobación </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_aprobacion_rdc ?date("d/m/Y",strtotime ($expediente->fecha_aprobacion_rdc)):'Sin datos' }}"></input>
            </td>

        </tr>

        <tr>
            <td style="width:33%; border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>Fecha de Archivo___________________________</b>
                </font>
            </td>
            <td  style="width:33%; border:1px solid; padding:8px" bgcolor="white" colspan="1">
                
            </td>
            <td  style="width:33%; border:1px solid; padding:8px" bgcolor="white" colspan="1">
                
            </td>
        </tr>
        <tr>
            <td style="width:33%; border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
                
               
                <label>Fecha de Aprobación </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_aprobacion_rdc ?date("d/m/Y",strtotime ($expediente->fecha_aprobacion_rdc)):'Sin datos' }}"></input></br></br>
            </td>

            <td style="width:33%; border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
            </td>

            <td style="width:33%;border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
            </td>

        </tr>
        
        
       
    </tbody>
</table>