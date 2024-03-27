@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de documentos identificativos";
    $rutaActualizar="documentosIdentificativos.update";
    $rutaIndice="documentosIdentificativos.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$documentoIdentificativo" :campos="$campos" >
</x-editopcionmenuapm>