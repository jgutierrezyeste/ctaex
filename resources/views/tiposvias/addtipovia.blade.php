@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Tipo de vía nuevo";
    $rutaGuardar="tiposVia.store";
    $rutaIndice="tiposVia.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>