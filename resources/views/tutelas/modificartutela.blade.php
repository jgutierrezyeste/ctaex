@php
    $titulo_menu="MODIFICAR TUTELA/S";  
    $ruta="tutelas.busqueda";
    $vista="tutelas.showtutelamodificar";
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_general>
