@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Iniciador procedimiento nuevo";
    $rutaGuardar="iniciadorProcedimiento.store";
    $rutaIndice="iniciadorProcedimiento.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>