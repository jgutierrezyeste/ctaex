@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de opciones de autorizacion";
    $rutaActualizar="opcionAutorizacion.update";
    $rutaIndice="opcionAutorizacion.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$opcionAutorizacion" :campos="$campos" >
</x-editopcionmenuapm>