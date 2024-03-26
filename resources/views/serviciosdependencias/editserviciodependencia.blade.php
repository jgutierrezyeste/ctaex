@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de carpeta de deceso";
    $rutaActualizar="serviciosDependencias.update";
    $rutaIndice="serviciosDependencias.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$serviciosDependencia" :campos="$campos" >
</x-editopcionmenuapm>