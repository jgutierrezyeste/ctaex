@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de prestaciones";
    $rutaActualizar="prestaciones.update";
    $rutaIndice="prestaciones.index";
    $campos=['nombre','siglas'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$prestacione" :campos="$campos" >
</x-editopcionmenuapm>