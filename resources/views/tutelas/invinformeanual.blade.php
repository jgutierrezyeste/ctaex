@php
    $titulo_menu="CONSULTA DE TUTELA/S";  
    $ruta="tutelas.busqueda";
    $vista="tutelas.showinvinformeanual";
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_general>

