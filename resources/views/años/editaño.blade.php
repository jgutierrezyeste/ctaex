@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de años";
    $rutaActualizar="años.update";
    $rutaIndice="años.index";
    $modelo="año";
    $campos=['nombre'];
     

@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$año" :campos="$campos" >
   

</x-editopcionmenuapm>