@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')


@section('subtitle')
    
    @component('_components.comun_expedientes')
        @slot('titulo_menu','CONSULTA DE EXPEDIENTES')
    @endcomponent

@endsection

@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>


<!-- FORMULARIO -->
<div align = "center"> 
    <form method ="GET" action ="{{route('expedientes.busqueda')}}" id="formulario_busqueda" name="formulario_busqueda">
        @csrf
        <table width="55%" cellspacing ="0" cellpadding="5" bordercolor="black" border="1">
            <tbody>
        
                @include('layouts._partials.comun_tabla_expedientes') 

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

