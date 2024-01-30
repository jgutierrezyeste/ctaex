@php
    $titulo_menu=" CONSULTA DE ADMINISTRACION DE BIENES";  
    $ruta="curatelas.busqueda";
    $vista="curatelas.showcentros";
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_general>

