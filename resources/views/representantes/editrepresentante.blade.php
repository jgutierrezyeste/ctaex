@php
    $rutaRegreso="index_apm";
    $subtitulo="Edicion de representantes";
    $rutaActualizar="representantes.update";
    $rutaIndice="representantes.index";
    
    $campos=['nombre','apellido1','apellido2'];     

@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$representante" :campos="$campos" >
   

</x-editopcionmenuapm>