@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de nacionalidades";
    $rutaActualizar="nacionalidades.update";
    $rutaIndice="nacionalidades.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$nacionalidade" :campos="$campos" >
</x-editopcionmenuapm>