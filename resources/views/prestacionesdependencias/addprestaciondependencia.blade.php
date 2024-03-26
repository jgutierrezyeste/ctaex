@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir prestacion dependencia nueva";
    $rutaGuardar="prestacionDependencias.store";
    $rutaIndice="prestacionDependencias.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>