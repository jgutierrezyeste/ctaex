@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir patología general nueva";
    $rutaGuardar="patologiasGenerales.store";
    $rutaIndice="patologiasGenerales.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>