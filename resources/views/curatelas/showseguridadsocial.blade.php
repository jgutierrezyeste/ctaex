@php
    $titulo_menu="MANDAR OFICIOS";  
    $subtitulo="SEGURIDAD SOCIAL";
    $ruta="curatelas.oficios";  
    $vista="curatelas.seguridadsocial";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>