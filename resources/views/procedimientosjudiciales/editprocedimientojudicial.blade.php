@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de procedimientos judiciales";
    $rutaActualizar="procedimientosJudiciales.update";
    $rutaIndice="procedimientosJudiciales.index";
    $campos=['abreviatura','nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$procedimientosJudiciale" :campos="$campos" >
</x-editopcionmenuapm>