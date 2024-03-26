@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir patología concreta nueva";
    $rutaGuardar="patologiasConcretas.store";
    $rutaIndice="patologiasConcretas.index";
    $campos=['nombre','patologia_general_id'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>