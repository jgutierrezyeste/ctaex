@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Prestacion Dependencia Servicio";
    $rutaGuardar="prestacionDependenciasServicios.store";
    $rutaIndice="prestacionDependenciasServicios.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>