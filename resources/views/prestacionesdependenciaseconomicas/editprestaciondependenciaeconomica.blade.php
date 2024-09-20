@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Prestacion Dependencias Economicas";
    $rutaActualizar="prestacionDependenciasEconomicas.update";
    $rutaIndice="prestacionDependenciasEconomicas.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$subtipoDependencia" :campos="$campos" >
</x-editopcionmenuapm>