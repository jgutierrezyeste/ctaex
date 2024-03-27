@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Seguros Médicos";
    $rutaActualizar="segurosMedicos.update";
    $rutaIndice="segurosMedicos.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$segurosMedico" :campos="$campos" >
</x-editopcionmenuapm>