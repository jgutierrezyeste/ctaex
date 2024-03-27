@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Tipos de rendiciones anuales";
    $rutaActualizar="tiposRendicionAnual.update";
    $rutaIndice="tiposRendicionAnual.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$tiposRendicionAnual" :campos="$campos" >
</x-editopcionmenuapm>