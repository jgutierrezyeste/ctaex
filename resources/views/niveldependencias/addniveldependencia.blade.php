@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir nivel dependencia nuevo";
    $rutaGuardar="nivelDependencias.store";
    $rutaIndice="nivelDependencias.index";
    $campos=['nivel'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>