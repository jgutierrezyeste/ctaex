@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir letrado nuevo";
    $rutaGuardar="letrados.store";
    $rutaIndice="letrados.index";
    $campos=['nombre','apellido1','apellido2'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>