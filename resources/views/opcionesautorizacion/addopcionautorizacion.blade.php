@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir opcion autorizacion nuevo";
    $rutaGuardar="opcionAutorizacion.store";
    $rutaIndice="opcionAutorizacion.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>