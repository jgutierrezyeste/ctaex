@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de juzgados";
    $rutaActualizar="juzgados.update";
    $rutaIndice="juzgados.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$juzgado" :campos="$campos" >
</x-editopcionmenuapm>