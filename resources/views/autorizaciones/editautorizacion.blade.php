@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de autorizaciones";
    $rutaActualizar="autorizacion.update";
    $rutaIndice="autorizacion.index";
    $modelo="autorizacion";
    $campos=['nombre'];
     

@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$autorizacion" :campos="$campos" >
   

</x-editopcionmenuapm>