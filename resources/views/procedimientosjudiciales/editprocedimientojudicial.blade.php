@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de procedimientos judiciales";
    $rutaUpdate="procedimientosJudiciales.update";
    $rutaIndice="procedimientosJudiciales.index";
    $campos=['abreviatura','nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaUpdate="$rutaUpdate" :rutaIndice="$rutaIndice" :elementoEdicion="$procedimientosJudiciale" :campos="$campos" >
</x-editopcionmenuapm>