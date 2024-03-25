
@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Autorización nueva";
    $rutaGuardar="autorizacion.store";
    $rutaIndice="autorizacion.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>