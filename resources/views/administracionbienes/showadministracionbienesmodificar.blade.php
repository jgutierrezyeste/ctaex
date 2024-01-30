@php
    $titulo_menu="LISTADO DE ADMINISTRACION DE BIENES";  
    $ruta="administracionbienes.modificar";  
    $vista="administracionbienes.modificaradministracionbienes";
   
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>