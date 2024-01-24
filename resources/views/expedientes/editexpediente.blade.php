@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')
@section('subtitle')
    
    @component('_components.comun_expedientes')
        @slot('titulo_menu','MODIFICACION DE EXPEDIENTES')
    @endcomponent

@endsection

@section('content')
<div align = "center"> 
    <form method ="GET" action ="{{route('expedientes.busquedaModificar')}}" id="formulario_busqueda" name="formulario_busqueda">
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


<div class="container">
    <input type=submit value="Borrar" action=""/>
</div>





@endsection
