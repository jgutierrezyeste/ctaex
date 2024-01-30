@php
    $titulo_menu="MANDAR OFICIOS";  
    $subtitulo="SEGURIDAD SOCIAL";
    $ruta="administracionbienes.oficios";  
    $vista="administracionbienes.seguridadsocial";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>