@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de niveles de dependencia";
    $rutaActualizar="nivelDependencias.update";
    $rutaIndice="nivelDependencias.index";
    $campos=['nivel'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$nivelDependencia" :campos="$campos" >
</x-editopcionmenuapm>