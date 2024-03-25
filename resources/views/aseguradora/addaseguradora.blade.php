

@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Aseguradora nueva";
    $rutaGuardar="aseguradoras.store";
    $rutaIndice="aseguradoras.index";
    $campos=['nombre','telefono1','telefono2'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>