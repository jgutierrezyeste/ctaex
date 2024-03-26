@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de prestaciones dependencias";
    $rutaActualizar="prestacionDependencias.update";
    $rutaIndice="prestacionDependencias.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$prestacionDependencia" :campos="$campos" >
</x-editopcionmenuapm>