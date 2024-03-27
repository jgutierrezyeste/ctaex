

@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Representante nuevo";
    $rutaGuardar="representantes.store";
    $rutaIndice="representantes.index";
    $campos=['nombre','apellido1','apellido2'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>