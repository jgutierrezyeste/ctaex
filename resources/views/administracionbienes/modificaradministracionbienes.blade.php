@php
    $titulo_menu="MODIFICAR ADMINISTRACION DE BIENES";  
    $ruta="administracionbienes.busqueda";
    $vista="administracionbienes.showadministracionbienesmodificar";
@endphp
<x-busqueda_simplificada :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_simplificada>
