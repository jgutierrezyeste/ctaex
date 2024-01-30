@php
    $titulo_menu="LISTADO DE CURATELA/S";  
    $ruta="curatelas.consultar";  
    $vista="curatelas.consultarcuratela";
   
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>