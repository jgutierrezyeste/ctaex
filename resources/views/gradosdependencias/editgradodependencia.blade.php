@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Grados de Dependencia";
    $rutaActualizar="gradosDependencia.update";
    $rutaIndice="gradosDependencia.index";
    $campos=['grado'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$gradosDependencium" :campos="$campos" >
</x-editopcionmenuapm>