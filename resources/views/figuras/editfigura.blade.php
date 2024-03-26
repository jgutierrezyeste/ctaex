@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de figuras";
    $rutaActualizar="figuras.update";
    $rutaIndice="figuras.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$figura" :campos="$campos" >
</x-editopcionmenuapm>