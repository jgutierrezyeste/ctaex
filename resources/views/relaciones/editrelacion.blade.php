@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de relaciones";
    $rutaActualizar="relaciones.update";
    $rutaIndice="relaciones.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$relacione" :campos="$campos" >
</x-editopcionmenuapm>