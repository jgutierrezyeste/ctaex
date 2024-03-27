@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Tipos de regimen";
    $rutaActualizar="tiposRegimen.update";
    $rutaIndice="tiposRegimen.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$tiposRegiman" :campos="$campos" >
</x-editopcionmenuapm>