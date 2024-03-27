@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir modo de resolución nuevo";
    $rutaGuardar="resolucionModos.store";
    $rutaIndice="resolucionModos.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>