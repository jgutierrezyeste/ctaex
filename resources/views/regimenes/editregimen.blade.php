@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de regimenes";
    $rutaActualizar="regimenes.update";
    $rutaIndice="regimenes.index";
    $campos=['nombre','abreviatura'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$regimene" :campos="$campos" >
</x-editopcionmenuapm>