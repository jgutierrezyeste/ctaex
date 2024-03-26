@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de motivos";
    $rutaActualizar="motivos.update";
    $rutaIndice="motivos.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$motivo" :campos="$campos" >
</x-editopcionmenuapm>