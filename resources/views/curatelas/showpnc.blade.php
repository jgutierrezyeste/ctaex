@php
    $titulo_menu="MANDAR OFICIOS";  
    $subtitulo="CONSEJERIA DE IGUALDAD Y EMPLEO (P.N.C)";
    $ruta="curatelas.oficios";  
    $vista="curatelas.pnc";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>