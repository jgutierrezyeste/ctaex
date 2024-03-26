@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de empleados";
    $rutaActualizar="empleados.update";
    $rutaIndice="empleados.index";
    $campos=['nombre'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$empleado" :campos="$campos" >
</x-editopcionmenuapm>