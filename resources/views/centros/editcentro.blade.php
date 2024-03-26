@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de centros";
    $rutaActualizar="centros.update";
    $rutaIndice="centros.index";
    $campos=['nombre','tipo_via_id','direccion','numero','planta','letra','codigo_postal_id','telefono','telefono2','fax','correo_electronico','observaciones'];
@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$centro" :campos="$campos" >
</x-editopcionmenuapm>