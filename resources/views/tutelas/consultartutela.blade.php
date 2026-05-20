@php
    $titulo_menu="CONSULTA DE TUTELA/S";  
    $ruta="tutelas.busqueda";
    $vista="tutelas.showtutelaconsulta";
    $campo='expte';
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista" :campo="$campo"></x-busqueda_general>

