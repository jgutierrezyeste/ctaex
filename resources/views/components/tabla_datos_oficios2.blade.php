@props (['expediente'])

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="5">
    
    
    <tbody>
        <tr>
            
            <td style="border:0px; align:center">

            <b style=" color:orange; font-size:20pt" >OFICIOS</b>
            </td>
        </tr>
        
      
        <tr>
            <td  style="border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>Centro residencia_________________________________</b>
                </font>
            </td>
            <td  style="border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>Peticion Judicial _______________________________</b>
                </font>
            </td>
            <td  style="border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>Juzgado Cargo ______________________________</b>
                </font>
            </td>
        </tr>
        <tr>
            <td style="width:33%; border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
                
               
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Recepción </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_recepcion ?date("d/m/Y",strtotime ($expediente->fecha_recepcion)):'Sin datos' }}"></input>
            </td>

            <td style="width:33%; border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
                
               
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Recepción </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_recepcion ?date("d/m/Y",strtotime ($expediente->fecha_recepcion)):'Sin datos' }}"></input>
            </td>

            <td style="width:33%;border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
                
                
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Recepción </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_recepcion ?date("d/m/Y",strtotime ($expediente->fecha_recepcion)):'Sin datos' }}"></input>
            </td>

        </tr>

        <tr>
            <td style="width:33%; border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>Autoriz.Judicial___________________________</b>
                </font>
            </td>
            <td  style="width:33%; border:1px solid; padding:8px" bgcolor="white" colspan="1">
                
            </td>
            <td  style="width:33%; border:1px solid; padding:8px" bgcolor="white" colspan="1">
                
            </td>
        </tr>
        <tr>
            <td style="width:33%; border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
                
               
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Recepción </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_recepcion ?date("d/m/Y",strtotime ($expediente->fecha_recepcion)):'Sin datos' }}"></input>
            </td>

            <td style="width:33%; border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
            </td>

            <td style="width:33%;border:1px solid; padding:8px; background-color: rgb(224, 204, 204)">
            </td>

        </tr>
        
        <tr>
            <td  align="right" style="border:1px solid; padding:12px" bgcolor="white" colspan="3">
                <font size="3" color="black" face="Arial" >
                    <b>Volver </b><a href="{{ route('expedientes.datosoficios', ["expedientes.showdatosoficios", $expediente->id]) }}"><img src="{{asset('assets/img/flecha_atras.png')}}" align="right"></a>
                </font>
            </td>
        </tr>
       
        
       
    </tbody>
</table>