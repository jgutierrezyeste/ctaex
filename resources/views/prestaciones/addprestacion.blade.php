@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir prestacion nueva";
    $rutaGuardar="prestaciones.store";
    $rutaIndice="prestaciones.index";
    $campos=['nombre','siglas'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>