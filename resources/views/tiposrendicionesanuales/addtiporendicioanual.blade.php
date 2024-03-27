@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Tipo de rendición anual  nuevo";
    $rutaGuardar="tiposRendicionAnual.store";
    $rutaIndice="tiposRendicionAnual.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>