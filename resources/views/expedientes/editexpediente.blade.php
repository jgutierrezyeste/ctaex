
@php
    $titulo_menu="MODIFICACION DE EXPEDIENTES";  
    $ruta="expedientes.busqueda";
    $vista="expedientes.showexpedientemodificar";
@endphp
<x-busqueda_simplificada :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_simplificada>
