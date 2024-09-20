@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de Prestacion Dependencias Servicios";
    $rutaActualizar="prestacionDependenciasServicios.update";
    $rutaIndice="prestacionDependenciasServicios.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$serviciosDependencia" :campos="$campos" >
</x-editopcionmenuapm>