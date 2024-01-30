@php
    $titulo_menu="LISTADO DE CURATELA/S";  
    $ruta="curatelas.modificar";  
    $vista="curatelas.modificarcuratela";
   
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>