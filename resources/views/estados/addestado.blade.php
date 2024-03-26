@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Estado nuevo";
    $rutaGuardar="estados.store";
    $rutaIndice="estados.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>