@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de patologías concretas";
    $rutaActualizar="patologiasConcretas.update";
    $rutaIndice="patologiasConcretas.index";
    $campos=['nombre','patologia_general_id'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$patologiasConcreta" :campos="$campos" >
</x-editopcionmenuapm>