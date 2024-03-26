@php
    $ruta_regreso="index_apm";
    $subtitulo=" Añadir Dependencia Servicio Subtipo";
    $rutaGuardar="subtipoDependencias.store";
    $rutaIndice="subtipoDependencias.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>