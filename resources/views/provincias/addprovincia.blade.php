@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir provincia nueva";
    $rutaGuardar="provincias.store";
    $rutaIndice="provinicas.index";
    $campos=['nombre','codigo'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>