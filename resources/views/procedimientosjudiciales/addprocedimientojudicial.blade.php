@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir procedimiento judicial nuevo";
    $rutaGuardar="procedimientosJudiciales.store";
    $rutaIndice="procedimientosJudiciales.index";
    $campos=['abreviatura','nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>