@props(['expedientes','regimenes','titulo','ruta','vista','campo'])
@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')


@section('subtitle')
    <x-comun_expedientes :titulo="$titulo"></x-comun_expedientes>
@endsection

@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>


<!-- FORMULARIO -->
<div align = "center"> 
    <form method ="GET" action ="{{route($ruta,$vista)}}" id="formulario_busquedaconsulta" name="formulario_busquedaconsulta">
        @csrf
        <table class="tablegeneral" cellspacing ="0" cellpadding="5" bordercolor="black" border="1">
            <tbody>
        
                <!--@include('layouts._partials.comun_tabla_expedientes')-->
                <x-comun_tabla_expedientes :expedientes="$expedientes" :regimenes="$regimenes" :campo="$campo"></x-comun_tabla_expedientes>

                @include('layouts._partials.comun_fechas_consulta') 
                        

            </tbody>
        </table>
    </br>
        <div class="container">
            <input type="submit" value="BUSCAR EXPEDIENTE" />
        </div>
    </form>

</div>


<script type="text/javascript">
   
</script>
@endsection