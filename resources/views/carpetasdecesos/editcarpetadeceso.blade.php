@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de carpeta de deceso";
    $rutaActualizar="carpetas.update";
    $rutaIndice="carpetas.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$carpeta" :campos="$campos" >
</x-editopcionmenuapm>