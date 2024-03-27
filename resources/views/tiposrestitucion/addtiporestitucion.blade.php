@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Tipo Restitucion nuevo";
    $rutaGuardar="tiposRestitucion.store";
    $rutaIndice="tiposRestitucion.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>