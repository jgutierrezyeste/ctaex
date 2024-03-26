@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir regimen nuevo";
    $rutaGuardar="regimenes.store";
    $rutaIndice="regimenes.index";
    $campos=['nombre','abreviatura'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>