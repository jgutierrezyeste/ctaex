@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Sexos";
    $rutaActualizar="sexo.update";
    $rutaIndice="sexo.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$sexo" :campos="$campos" >
</x-editopcionmenuapm>