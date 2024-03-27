@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Trabajador/a Social nuevo/a";
    $rutaGuardar="trabajadoresSociales.store";
    $rutaIndice="trabajadoresSociales.index";
    $campos=['codificacion','nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>