@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Tipo de regimen nuevo";
    $rutaGuardar="tiposRegimen.store";
    $rutaIndice="tiposRegimen.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>