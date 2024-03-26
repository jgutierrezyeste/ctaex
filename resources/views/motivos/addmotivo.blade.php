@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir motivo nuevo";
    $rutaGuardar="motivos.store";
    $rutaIndice="motivos.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>