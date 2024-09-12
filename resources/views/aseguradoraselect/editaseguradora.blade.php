@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de aseguradoras";
    $rutaActualizar="aseguradoras.update";
    $rutaIndice="aseguradoras.index";
    $modelo="aseguradora";
    $campos=['nombre','telefono1','telefono2'];
     

@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$aseguradora" :campos="$campos" >
   

</x-editopcionmenuapm>