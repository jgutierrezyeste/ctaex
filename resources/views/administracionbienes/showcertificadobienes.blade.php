@php
    $titulo_menu="MANDAR OFICIOS";  
    $subtitulo="AYUNTAMIENTO CERTIFICADO DE BIENES";
    $ruta="administracionbienes.oficios";  
    $vista="administracionbienes.certificadobienes";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>