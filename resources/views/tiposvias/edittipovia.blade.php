@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Tipos de vía";
    $rutaActualizar="tiposVia.update";
    $rutaIndice="tiposVia.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$tiposVium" :campos="$campos" >
</x-editopcionmenuapm>