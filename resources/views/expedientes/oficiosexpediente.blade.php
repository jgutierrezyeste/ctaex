@php
    $titulo_menu="prueba_oficio";  
    $ruta="expedientes.busquedaConsulta" 
    
@endphp
<x-busqueda_general :expedientes="$expedientes" :regimenes="$regimenes" :titulo="$titulo_menu" :ruta="$ruta" ></x-busqueda_general>