@php
    $titulo_menu="OFICIOS DE CURADOR";  
    $ruta="expedientes.busqueda" ;
    $vista="expedientes.showexpedienteoficiocurador"; 
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_general>