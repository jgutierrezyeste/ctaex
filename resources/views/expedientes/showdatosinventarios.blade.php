@php
/*a esta vista llegan $expedietne, $expdatospersonales*/
 if (strpos($expediente->expte, 'T'))
            $tipoficha="Tutela";
 elseif(strpos($expediente->expte, 'C'))
            $tipoficha="Curatela";
 elseif (strpos($expediente->expte, 'AB'))
            $tipoficha="Administracion de Bienes";
 elseif (strpos($expediente->expte, 'DJ'))
            $tipoficha="Defensa Judicial";
@endphp
@extends ('layouts.landing_intranet')

@section('subtitle')  
@endsection

@section('content')


<form id="datos_expediente_extendido" name="datos_expediente_extendido"  method ="GET" >
    @csrf
    <div align="right">
    </br>
    <x-comun_expedientes titulo="" ruta="index_intranet"> </x-comun_expedientes>
    <x-ficha :expediente="$expediente"  :tipoficha="$tipoficha"></x-ficha>
    </div>  
</br>
</br>
    <div style="display:flex">
    <x-tabla_menu_datos_intranet :expediente="$expediente" ></x-tabla_menu_datos_intranet>
    
    <x-tabla_datos_inventarios :expediente="$expediente" ></x-tabla_datos_inventarios>
    </div>
    <a href="{{route('expedientes.consultar','expedientes.consultarexpediente')}}"> Vuelta a consulta </a>
    

</form>
@endsection