@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir relación nueva";
    $rutaGuardar="relaciones.store";
    $rutaIndice="relaciones.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>