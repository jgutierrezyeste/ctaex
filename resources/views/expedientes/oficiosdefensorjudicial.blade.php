@php
    $titulo_menu="OFICIOS DEFENSOR JUDICIAL";  
    $ruta="expedientes.busqueda" ;
    $vista="expedientes.showexpedienteoficiodefensorjudicial"; 
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista"></x-busqueda_general>