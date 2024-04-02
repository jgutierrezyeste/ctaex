@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir nacinalidad nueva";
    $rutaGuardar="nacionalidades.store";
    $rutaIndice="nacionalidades.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>