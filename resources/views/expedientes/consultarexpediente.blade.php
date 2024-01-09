@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')


@section('subtitle')
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td width="33%" align="left">
                    @component('_components.back_principal')
                    @endcomponent
                </td>
                <td align="center">
                    <font size ="6" color="DarkOrange" >
                        <b> CONSULTA DE EXPEDIENTES </b>
                    </font>
                </td>
                <td width="33%"></td>
            </tr>
        </tbody>
    </table>

@endsection

@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>


<!-- FORMULARIO -->
<div align = "center"> 
    <form method ="GET" action ="{{route('expedientes.busqueda')}}" id="formulario_busqueda" name="formulario_busqueda">
        @csrf
        <table width="55%" cellspacing ="0" cellpadding="5" bordercolor="black" border="1">
            <tbody>
        
            <tr>
                <td width="20%" bgcolor="white"> 
                    <font face="Arial">
                    <label> Número de expediente </label>
                    </font>
                </td>        
                        
                <td width="60%" bgcolor="#FFEBCD">   
                        
                        
                        <select id="expte-consulta" name="id" class="form-control" style="width:100px">
                            <option value=""></option>
                            @foreach ($expedientes as $expediente)
                                <option value="{{ $expediente['id'] }}">{{ $expediente['expte'] }}</option>
                            @endforeach
                            
                        </select>
                </td>      
            </tr>
                        
            <tr>
                <td width="20%" bgcolor="white"> 
                    <font face="Arial">
                    <label> Regimen Inicial </label>
                    </font>
                </td>

                <td width="60%" bgcolor="#FFEBCD">      
                    <select id="expte-consulta" name="regimen_inicial" class="form-control" style="width:100px">
                        <option value=""></option>
                        @foreach ($expedientes as $expediente)
                            <option value=""></option>
                        @endforeach
                        
                    </select>
                </td>
            </tr>

            <tr>
                <td width="20%" bgcolor="white"> 
                    <font face="Arial">
                    <label> Apellidos </label>
                    </font>
                </td>

                <td width="60%" bgcolor="#FFEBCD">      
                    <input type="text" id="apellido" name="apellido" style="color:blue"/>
                </td>
            </tr>

            <tr>
                <td width="20%" bgcolor="white"> 
                    <font face="Arial">
                    <label> Nombre </label>
                    </font>
                </td>

                <td width="60%" bgcolor="#FFEBCD">      
                    <input type="text" id="nombre" name="nombre" style="color:blue"/>
                </td>
            </tr>

            <tr>
                <td width="20%" bgcolor="white"> 
                    <font face="Arial">
                    <label> Propuesta Aceptacion </label>
                    </font>
                </td>

                <td width="60%" bgcolor="#FFEBCD">      
                        Desde : 
                            <input type="date" class="form-control" id="propuestaAceptacionDesde" name="propuestaAceptacionDesde" />
                        Hasta : 
                            <input type="date" class="form-control" id="propuestaAceptacionHasta" name="propuestaAceptacionHasta"/>
                </td>
            </tr>

            <tr>
                <td width="20%" bgcolor="white"> 
                    <font face="Arial">
                    <label> Entrada Sanidad y Dependencia </label>
                    </font>
                </td>

                <td width="60%" bgcolor="#FFEBCD">      
                        Desde : 
                            <input type="date" class="form-control" id="entradaSanidadDesde" name="entradaSanidadDesde" />
                        Hasta : 
                            <input type="date" class="form-control" id="entradaSanidadHasta" name="entradaSanidadHasta"/>
                </td>
            </tr>
            
            <tr>
                <td width="20%" bgcolor="white"> 
                    <font face="Arial">
                    <label> Enviar Gabinete Juridico </label>
                    </font>
                </td>

                <td width="60%" bgcolor="#FFEBCD">      
                        Desde : 
                            <input type="date" class="form-control" id="enviarGabineteDesde" name="enviarGabineteDesde" />
                        Hasta : 
                            <input type="date" class="form-control" id="enviarGabineteHasta" name="enviarGabineteHasta"/>
                </td>
            </tr>

            <tr>
                <td width="20%" bgcolor="white"> 
                    <font face="Arial">
                    <label> Recibir Gabinete Juridico </label>
                    </font>
                </td>

                <td width="60%" bgcolor="#FFEBCD">      
                        Desde : 
                            <input type="date" class="form-control" id="recibirGabineteDesde" name="recibirGabineteDesde" />
                        Hasta : 
                            <input type="date" class="form-control" id="recibirGabineteHasta" name="recibirGabineteHasta"/>
                </td>
            </tr>         
                        
                       
                    
                        
                    
                


        

            </tbody>
        </table>
        <div class="container">
            <input type="submit" value="BUSCAR EXPEDIENTE" />
        </div>
    </form>

</div>


<script type="text/javascript">
   
</script>
@endsection

