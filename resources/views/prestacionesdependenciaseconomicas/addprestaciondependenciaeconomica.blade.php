@php
    $ruta_regreso="index_apm";
    $subtitulo=" Añadir Prestacion Dependencias Economicas";
    $rutaGuardar="prestacionDependenciasEconomicas.store";
    $rutaIndice="prestacionDependenciasEconomicas.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>