@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de estados";
    $rutaActualizar="estados.update";
    $rutaIndice="estados.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$estado" :campos="$campos" >
</x-editopcionmenuapm>