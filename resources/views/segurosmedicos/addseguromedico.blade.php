@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Seguro Médico nuevo";
    $rutaGuardar="segurosMedicos.store";
    $rutaIndice="segurosMedicos.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>