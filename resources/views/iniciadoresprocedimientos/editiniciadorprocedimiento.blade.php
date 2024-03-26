@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Iniciadores de procedimiento";
    $rutaActualizar="iniciadorProcedimiento.update";
    $rutaIndice="iniciadorProcedimiento.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$iniciadorProcedimiento" :campos="$campos" >
</x-editopcionmenuapm>