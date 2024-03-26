@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Dependencia Servicio Subtipo";
    $rutaActualizar="subtipoDependencias.update";
    $rutaIndice="subtipoDependencias.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$subtipoDependencia" :campos="$campos" >
</x-editopcionmenuapm>