@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Trabajadores Sociales";
    $rutaActualizar="trabajadoresSociales.update";
    $rutaIndice="trabajadoresSociales.index";
    $campos=['codificacion','nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$trabajadoresSociale" :campos="$campos" >
</x-editopcionmenuapm>