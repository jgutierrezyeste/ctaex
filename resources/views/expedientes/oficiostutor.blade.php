@php
    $titulo_menu="OFICIOS ACUERDO TUTOR";  
    $ruta="expedientes.busqueda";  
    $vista="expedientes.showexpedienteoficiotutor"; 
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_general>