@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de modos de resolución";
    $rutaActualizar="resolucionModos.update";
    $rutaIndice="resolucionModos.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$resolucionModo" :campos="$campos" >
</x-editopcionmenuapm>