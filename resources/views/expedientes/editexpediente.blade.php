
@php
    $titulo_menu="MODIFICACION DE EXPEDIENTES";  
    $ruta="expedientes.busquedaModificar"  
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta"></x-busqueda_general>
