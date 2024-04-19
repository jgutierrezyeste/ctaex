@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de provincias";
    $rutaActualizar="provincias.update";
    $rutaIndice="provincias.index";
    $campos=['nombre','codigo'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$opcionAutorizacion" :campos="$campos" >
</x-editopcionmenuapm>