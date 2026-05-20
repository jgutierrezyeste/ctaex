

<!DOCTYPE html>
<html lang="en">
    

@extends ('layouts.landing_intranet')

 


@section('content')
@php
 if (strpos($expediente->expte, 'T'))
            $tipoficha="Tutela";
 elseif(strpos($expediente->expte, 'C'))
            $tipoficha="Curatela";
 elseif (strpos($expediente->expte, 'AB'))
            $tipoficha="Administracion de Bienes";
 elseif (strpos($expediente->expte, 'DJ'))
            $tipoficha="Defensa Judicial";
 else {
    $tipoficha="";
 }
@endphp
<form id="datos_expediente" name="datos_expediente"  method ="GET" >
    @csrf
    <div align="right">
    </br>
    <x-comun_expedientes titulo="CONSULTA DE EXPEDIENTE" ruta="index_intranet"> </x-comun_expedientes>
    <x-ficha :expediente="$expediente"  :tipoficha="$tipoficha"></x-ficha>
    </div>  
</br>
</br>
    <div style="display:flex">
        <x-tabla_menu_datos_intranet :expediente="$expediente"></x-tabla_menu_datos_intranet>
        @yield('componente_especifico')
        <x-tabla_menu_procesos_expediente :expediente="$expediente" ></x-tabla_menu_procesos_expediente>
    </div>
    <a href="{{route('expedientes.consultar','expedientes.consultarexpediente')}}"> Vuelta a consulta </a>
    

</form>
    
@endsection

