@php
    $titulo_menu="LISTADO DE ADMINISTRACION DE BIENES";  
    $ruta="administracionbienes.consultar";  
    $vista="administracionbienes.consultaradministracionbienes";
   
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>