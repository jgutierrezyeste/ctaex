@props (['expediente'])

<table  class="tablegeneral" style="margin-left:10%; width:70%" cellspacing="0" cellpadding="5">
    
    
    <tbody>
        <tr  colspan="3" >
            
            <td style="border:0px">

            <b style=" color:orange; font-size:20pt" >OFICIOS</b>
            </td>
        </tr>
        
        <tr>
            <td  style="border:1px solid; padding:12px" bgcolor="white" colspan="3">
                <font size="3" color="black" face="Arial">
                    <b>Ayuntamiento _________________________________</b>
                </font>
            </td>
        </tr>
        <tr>
            <td style=" width:33%;border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                
                <label>Exposicion del caso </label></br></br>
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Recepción </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_recepcion ?date("d/m/Y",strtotime ($expediente->fecha_recepcion)):'Sin datos' }}"></input>
            </td>

            <td style="width:33%;border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                
                <label>Certificado de bienes </label></br></br>
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Recepción </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_recepcion ?date("d/m/Y",strtotime ($expediente->fecha_recepcion)):'Sin datos' }}"></input>
            </td>

            <td style="width:33%; border:0px; border-left:1px solid; border-right:1px solid; padding:12px; background-color: rgb(224, 204, 204)">
                
                <label>Pensiones/Entidad Gestora </label></br></br>
                <label>Fecha de envío </label>
                <input class="inputtable" id="fecha_envio" type="date" style="color:blue" value="{{ $expediente->fecha_remision ?date("d/m/Y",strtotime ($expediente->fecha_remision)):'Sin datos' }}"></input></br></br>
                <label>Fecha Recepción </label>
                <input class="inputtable" id="fecha_rececpcion" type="date" style="color:blue" value="{{ $expediente->fecha_recepcion ?date("d/m/Y",strtotime ($expediente->fecha_recepcion)):'Sin datos' }}"></input>
            </td>

        </tr>
        <tr>
            <td  style="border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>P.N.C/I.N.S.S _________________________________</b>
                </font>
            </td>
            <td  style="border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>Bancos Pension _______________________________</b>
                </font>
            </td>
            <td  style="border:1px solid; padding:8px" bgcolor="white" colspan="1">
                <font size="3" color="black" face="Arial">
                    <b>Banco de España ______________________________</b>
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
            <td  align="right" style="border:1px solid; padding:12px" bgcolor="white" colspan="3">
                <font size="3" color="black" face="Arial" >
                    <b>Más Oficios </b><a href="{{ route('expedientes.datosoficios', ["expedientes.showdatosoficios2", $expediente->id]) }}"><img src="{{asset('assets/img/flecha.png')}}" align="right"></a>
                </font>
            </td>
        </tr>
       
        
       
    </tbody>
</table>
