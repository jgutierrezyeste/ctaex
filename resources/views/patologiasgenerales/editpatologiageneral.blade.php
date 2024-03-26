@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de patologías generales";
    $rutaActualizar="patologiasGenerales.update";
    $rutaIndice="patologiasGenerales.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$patologiasGenerale" :campos="$campos" >
</x-editopcionmenuapm>