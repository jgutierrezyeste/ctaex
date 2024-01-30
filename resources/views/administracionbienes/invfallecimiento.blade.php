@php
    $titulo_menu="CONSULTA DE ADMINISTRACION DE BIENES";  
    $ruta="administracionbienes.busqueda";
    $vista="administracionbienes.showinvfallecimiento";
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_general>

