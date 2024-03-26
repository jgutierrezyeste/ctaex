@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de letrados";
    $rutaActualizar="letrados.update";
    $rutaIndice="letrados.index";
    $campos=['nombre','apellido1','apellido2'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$letrado" :campos="$campos" >
</x-editopcionmenuapm>