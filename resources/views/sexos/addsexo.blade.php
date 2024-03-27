@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Sexo nuevo";
    $rutaGuardar="sexo.store";
    $rutaIndice="sexo.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>