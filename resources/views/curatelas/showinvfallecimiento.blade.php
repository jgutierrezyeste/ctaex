@php
    $titulo_menu="MANDAR INVENTARIOS";  
    $subtitulo="FALLECIMIENTO";
    $ruta="curatelas.inventarios";  
    $vista="curatelas.invfallecimiento";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>