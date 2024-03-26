@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Carpeta nueva";
    $rutaGuardar="serviciosDependencias.store";
    $rutaIndice="serviciosDependencias.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>