@php
    $titulo_menu="CONSULTA DE EXPEDIENTE/S";  
    $ruta="expedientes.busqueda";
    $vista="expedientes.showexpedienteconsulta";
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_general>