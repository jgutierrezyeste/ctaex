@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir juzgado nuevo";
    $rutaGuardar="juzgados.store";
    $rutaIndice="juzgados.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>