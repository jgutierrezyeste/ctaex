@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Grado nuevo";
    $rutaGuardar="gradosDependencia.store";
    $rutaIndice="gradosDependencia.index";
    $campos=['grado'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>