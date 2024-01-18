@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')


@section('subtitle')
    
    @component('_components.comun_expedientes')
        @slot('titulo_menu','CONSULTA DE LA/S TUTELA/S')
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
