@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Figura nueva";
    $rutaGuardar="figuras.store";
    $rutaIndice="figuras.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>