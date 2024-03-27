@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Tipos de restitucion";
    $rutaActualizar="tiposRestitucion.update";
    $rutaIndice="tiposRestitucion.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$tiposRestitucion" :campos="$campos" >
</x-editopcionmenuapm>