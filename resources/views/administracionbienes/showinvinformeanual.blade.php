@php
    $titulo_menu="MANDAR INVENTARIOS";  
    $subtitulo="INFORME ANUAL";
    $ruta="administracionbienes.inventarios";  
    $vista="administracionbienes.invinformeanual";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>