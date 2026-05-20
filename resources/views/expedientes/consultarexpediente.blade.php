@php
    $titulo_menu="CONSULTA DE EXPEDIENTE/S";  
    $ruta="expedientes.busqueda";
    $vista="expedientes.showexpedienteconsulta";
    $campo='num_expte_intranet';
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" :vista="$vista" :campo="$campo"></x-busqueda_general>