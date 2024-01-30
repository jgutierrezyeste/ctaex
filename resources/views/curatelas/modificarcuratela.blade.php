@php
    $titulo_menu="MODIFICAR CURATELA/S";  
    $ruta="curatelas.busqueda";
    $vista="curatelas.showcuratelamodificar";
@endphp
<x-busqueda_simplificada :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_simplificada>
