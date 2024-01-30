@php
    $titulo_menu="MANDAR INVENTARIOS";  
    $subtitulo="INFORME ANUAL";
    $ruta="curatelas.inventarios";  
    $vista="curatelas.invinformeanual";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>