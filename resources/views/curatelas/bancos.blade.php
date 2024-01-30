@php
    $titulo_menu="CONSULTA DE CURATELA/S";  
    $ruta="curatelas.busqueda";
    $vista="curatelas.showbancos";
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_general>

