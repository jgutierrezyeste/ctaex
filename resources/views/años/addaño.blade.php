
@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Año nuevo";
    $rutaGuardar="años.store";
    $rutaIndice="años.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>