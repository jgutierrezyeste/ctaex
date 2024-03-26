@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de entidades bancarias";
    $rutaActualizar="entidadesbancarias.update";
    $rutaIndice="entidadesbancarias.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$entidadesbancaria" :campos="$campos" >
</x-editopcionmenuapm>