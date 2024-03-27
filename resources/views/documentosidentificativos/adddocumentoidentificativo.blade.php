@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Documento Identificativo nuevo";
    $rutaGuardar="documentosIdentificativos.store";
    $rutaIndice="documentosIdentificativos.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>