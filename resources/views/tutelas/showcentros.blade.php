@php
    $titulo_menu="MANDAR OFICIOS";  
    $subtitulo="CENTRO DONDE RESIDE";
    $ruta="tutelas.oficios";  
    $vista="tutelas.centros";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>